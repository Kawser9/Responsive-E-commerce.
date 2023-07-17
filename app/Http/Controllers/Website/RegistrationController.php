<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration.registration');
    }
    
    public function login()
    {
        return view('frontend.pages.registration.login');
    }
}
