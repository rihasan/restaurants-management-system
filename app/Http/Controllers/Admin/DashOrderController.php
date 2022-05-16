<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orders;

class DashOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashorder()
    {
        $orders = Orders::orderBy('id', 'DESC')->get();
        return view('admin.dashorder', ['orders'=>$orders]);
    }


    public function confirm($id, $name){
        $data = array(
            'status' => $name,
        );
        Orders::where('id', $id)->update($data);
        return redirect('/dashorder')->with('dashordercon', "Order is succesfully Confirmed.");
    }


    public function removeorder($id){
        Orders::where('id', $id)->delete();
        return redirect('/dashorder')->with("orderfoodr", "Order is successfully Removed");
    }
}
