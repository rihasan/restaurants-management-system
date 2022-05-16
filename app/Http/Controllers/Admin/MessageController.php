<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Messages;

class MessageController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}


	
    public function message()
    {
    	$messages = Messages::get();
    	return view('admin.message', ['messages' => $messages]);
    }

    public function removemessage($id){
      	Messages::where('id', $id)->delete();
        return redirect('/message')->with("deletemessage", "Message is successfully Removed");
    }


}
