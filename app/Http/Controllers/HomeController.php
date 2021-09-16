<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = ['Blog 01','Blog 02','Blog 03'];
        
        return view('home')->with('blog',$blogs);
    }
}
