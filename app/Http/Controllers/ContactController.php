<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class ContactController extends Controller
{
    public function contact()
    {
    	return view('contact');
    }



    public function docontact(Request $request)
    {
    	$data = array(
    		'name' => $request->name,
    		'email' => $request->email,
    		'subject' => $request->subject,
    		'message' => $request->message
    	);
    	Messages::create($data);
    	return redirect('/contact')->with('addcontact', 'Your Message send successfully.');
    }
}
