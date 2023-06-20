<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function list()
    {
        return view('backend.pages.house.list');
    }
}
