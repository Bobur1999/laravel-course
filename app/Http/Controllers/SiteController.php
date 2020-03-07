<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function menu()
    {
        return view('menu');
    }
    public function chef()
    {
        return view('chef');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blogdetails()
    {
        return view('blogdetails');
    }
    public function contact()
    {
        return view('contact');
    }
}
