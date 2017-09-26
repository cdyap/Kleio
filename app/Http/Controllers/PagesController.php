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

        $email = $data['email'];

        Mail::send('email.email', ['name' => $data['name'], 'text' => $data['message'], 'email' => $data['email']], function ($message) use ($data)
        {

            $message->from($data['email'], $data['name']);
            $message->subject("Kleio Inquiry from ". $data['name']);
            $message->to('cdyap@outlook.com');

        });

        return response()->json(['message' => 'Email sent!']);

    }
}
