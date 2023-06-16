<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list()
    {
        return view('backend.admin.list');
    }
    public function create()
    {
        return view('backend.admin.create');
    }
    public function update()
    {
        return view('backend.admin.edit');
    }
}
