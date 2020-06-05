<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\course;

class PageController extends Controller
{
    public function getSearch(Request $req){
    	$course=course::where('name','like','%'.$req->key.'%')->get();
    	return view('page.search',compact('course')); 	
    }
}
