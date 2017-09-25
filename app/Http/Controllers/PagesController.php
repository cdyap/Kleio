<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class PagesController extends Controller
{
    //
    public function index(){
    	return view('pages_en.index');
    }

    public function about_us(){
    	return view('pages_en.about_us');
    }

    public function submit(Request $request){
    	$this->validate($request,[
		    'email'     => 'required|email',
		    'name'   => 'required',
		    'message'      => 'required'
		]);

		$data = [
            'email'   => $request->input('email'), 
            'name' => $request->input('name'),
            'message'    => $request->input('message')
        ];

		$name = $data['name'];
        $message = $data['message'];

        Mail::send('email.email', ['name' => $name, 'message' => $message], function ($message)
        {

            $message->from($data['email'], $name);
            $message->subject("Kleio Inquiry from ". $name);
            $message->to('cdyap@outlook.com');

        });

        return response()->json(['message' => 'Email sent!']);

    }
}
