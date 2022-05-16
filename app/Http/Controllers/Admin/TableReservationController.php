<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservations;

class TableReservationController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}



    public function tablereservation()
    {
    	$reservations = Reservations::get();
    	return view('admin.tablereservation', ['reservations'=>$reservations]);
    }


    public function approve($id, $name){
       $data = array(
            'status' => $name,    
        );
      	Reservations::where('id', $id)->update($data);
      	return redirect('/tablereservation')->with('tableapprove', "Resevation is Approved.");
    }

    public function deletereservation($id){
      	Reservations::where('id', $id)->delete();
        return redirect('/tablereservation')->with("deletereservationtable", "Resevation is successfully Removed");
    }
}
