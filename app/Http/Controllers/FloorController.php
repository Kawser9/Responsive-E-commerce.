<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloorController extends Controller
{
    public function list()
    {
        return view('backend.floor.list');
    }
}
