<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site3Controller extends Controller
{
    public function index(){
        return view('site3.index');
    }
    public function about(){
        return view('site3.about');
    }
    public function contact(){
        return view('site3.contact');
    }
    public function post(){
        return view('site3.post');
    }
}
