<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newadmins;

class NewAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function newadmin()
    {
    	$newadmins = Newadmins::get();
    	return view('admin.newadmin', ['newadmins'=>$newadmins]);
    }



    public function doaddadmin(Request $request)
    {
    	$data = array(
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => $request->password,
    		'phone' => $request->phone
    	);
    	Newadmins::create($data);
    	return redirect('/newadmin')->with("addnewadmin", "New Admin is created succesfully.");
    }
}
