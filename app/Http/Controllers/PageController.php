<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function about(){
    	return view('pages/about');
    }
    function events(){
    	return view('pages/events');
    }
    function contact(){
    	return view('pages/contact');
    }
}
