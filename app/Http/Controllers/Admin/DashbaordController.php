<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Orders;
use App\Menu;
use App\Expenses;

class DashbaordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function dashboard()
    {  
        $totalorder = count(Orders::get());
        $totalitem = count(Menu::get());
         $rinitprice = 0;
       $einitprice = 0;
       $reservations = Orders::get();
            foreach ($reservations as $value) {
         $rinitprice += $value->totalprice;
       }

       $expense = Expenses::get();

      foreach ($expense as $value) {
         $einitprice += $value->amount;
       }

       $revenue = $rinitprice - $einitprice;

       $orders = Orders::orderBy('id', 'DESC')->limit(8)->get();
    	return view('admin.dashboard', ['orders' => $orders, 'totalorder' => $totalorder, 'totalitem' => $totalitem, 'revenue' => $revenue]);
    }

    public function editprofile(Request $request){
       $userid = Auth::user()->id;

        $password = Hash::make($request->password);
        print_r($password);
        // exit();

        $data = array(
             'name' =>$request->name,
             'email' => $request->email,
        	'password'  => $password
        );

        User::where('id', $userid)->update($data);
        return  redirect('/dashboard')->with("adminpasschang", "Your Profile is successfully Update");


    }
}
