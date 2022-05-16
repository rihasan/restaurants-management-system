<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;

class ReservationController extends Controller
{
    public function reservation()
    {
    	return view('reservation');
    }



    public function doreservation(Request $request)
    {
    	$data = array(
    		'name' => $request->name,
    		'email' => $request->email,
    		'phone' => $request->phone,
    		'tableno' => $request->tableno,
    		'date' => $request->date,
    		'time' => $request->time,
    		'noofguest' => $request->noofguest,
    		'status' => 'Pending'
    	);
    	Reservations::create($data);
    	return redirect('/reservation')->with('addreservation', 'Your Table Reservation is DONE. Please wait for approval and check your Email for confirmation');
    }
}
