<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function userlogin()
    {
        return view('userlogin');
    }
    public function userregistration()
    {
        return view('userregistration');
    }
    public function adminlogin()
    {
        return view('adminlogin');
    }
}
