<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $products=Product::count();
        $order=Order::count();
        $pendingOrder=Order::where('order_status','pending')->count();
        return view('backend.pages.dashboard',compact(['products','order','pendingOrder']));
    }
    public function changeLang($lang)
    {
      App::setLocale($lang);
      session()->put('locale',$lang);

      return redirect()->route('home');
    }

}
