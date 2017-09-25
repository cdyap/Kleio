<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
    	return view('pages_en.index');
    }

    public function about_us(){
    	return view('pages_en.about_us');
    }
}
