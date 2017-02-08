<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function wel()
    {
        return view('welcome');
    }
        public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('layouts.admin');
    }
    public function profile(){
        return view('pages.profile',array('user' =>Auth::user()));
    }
    public function update_prof_pic(Request $request){
        if ($request->hasFile('profile_picture')) {
            $pic = $request->file('profile_picture');
            $filename = time().'.'.$pic->getClientOriginalExtension();
            Image::make($pic)->resize(300,300)->save(public_path('/upload/profile picture/'. $filename));
            $user = Auth::user();
            $user->picture =$filename;
            $user->save();
        }
        return view('pages.profile',array('user' => Auth::user()));
    }

}
