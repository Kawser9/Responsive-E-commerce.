<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function dashboard()
{
    $products=Product::count();
    $order=Order::count();
    $pendingOrder=Order::where('order_status','pending')->count();
    return view('backend.pages.dashboard',compact(['products','order','pendingOrder']));
}
}
