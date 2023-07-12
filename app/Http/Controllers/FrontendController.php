<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function master()
    {
        return view('frontend.pages.home');
    }

}
