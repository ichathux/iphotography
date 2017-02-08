<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Storage;
use App\News;
use App\events;

class DataController extends Controller
{
    public function show(){
    	return view('layouts.add_news');    
    }
    public function dshow(){
    	return view('layouts.dashboard');    
    }
        public function wshow(){
    	return view('welcome');    
    }
    public function show_news(){
        $News = DB::table('news')->take(15)->orderBy('id', 'desc')->get();
        return view('pages.news',compact('News'));
    }
    public function show_events(){
        $Events = DB::table('events')->paginate(12);
        return view('pages.events',compact('Events'));
    }
    public function add_events(){
        return view('layouts.add_events');
    }
    public function view_news($id){

        $News = DB::table('news')->where('id','=',$id)->get();

        return view('pages.view_news',compact('News'));
    }

    public function insert_news(Request $request){

    	$image = $request->file('image');
    	$filename = $image->getClientOriginalName();
    	//$News->image = $request->$filename;
    	Storage::put('/upload/images/'.$filename, file_get_contents($request->file('image')->getRealPath()));
    	
    	$News = new News;
    	$News->title=$request->title;
    	$News->detail=$request->editor1;
    	$News->image=$filename;
    	$News->save();
    	return view('layouts.add_news'); 
    }
    public function insert_events(Request $request){

        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        //$News->image = $request->$filename;
        Storage::put('/upload/events_images/'.$filename, file_get_contents($request->file('image')->getRealPath()));
        
        $Events = new Events;
        $Events->name=$request->title;
        $Events->date=$request->date;
        $Events->start_time=$request->time;
        $Events->detail=$request->editor1;
        $Events->image=$filename;
        $Events->save();
        return view('layouts.add_events'); 
    }
    
}
