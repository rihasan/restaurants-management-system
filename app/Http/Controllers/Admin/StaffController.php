<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Staffs;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function staff()
    {
    	$staffs = Staffs::get();
    	return view('admin.staff', ['staffs' => $staffs]);
    }



    public function doaddstaff(Request $request)
    {
    	$data = array(
    		'name' => $request->name,
	    	'designation' => $request->designation,
	    	'email' => $request->email,
	    	'phone' => $request->phone,
	    	'address' => $request->address,
	    	'salary' => $request->salary
    	);
    	Staffs::create($data);
    	return redirect('/staff')->with("addstaff", "Staff details is succesfully saved.");
    }


    public function removestaff($id){
        Staffs::where('id', $id)->delete();
        return redirect('/staff')->with("deletestaff", "Staff is successfully Removed");
    }

    public function editstaff(Request $request){
        $id = $request->stassid;
        $data = array(
            'name' => $request->name,
            'designation' => $request->designation,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'salary' => $request->salary
        );
        Staffs::where('id', $id)->update($data);
        return redirect('/staff')->with("upstaff", "Staff details is succesfully Update.");
    }
}
