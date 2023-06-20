<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list()
    {
        return view('backend.pages.admin.list');
    }
    public function create()
    {
        return view('backend.pages.admin.create');
    }
    public function update()
    {
        return view('backend.pages.admin.edit');
    }
}
