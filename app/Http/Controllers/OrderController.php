<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Orders;
class OrderController extends Controller
{
    public function order()
    {
    	$foodscates = Menu::get();
    	return view('order', ['foodscates' => $foodscates]);
    }

    public function storeorder(Request $request){

    	$foodlist = array();
    	$foodprice = 0;
     
        $foodlistwithprice = $request->foodlist;
        foreach($foodlistwithprice as $fp){
        	$newarray = explode('-', $fp);
        	$foodlist[] = $newarray[0];
        	 $foodprice += $newarray[1];
        }

        $newfoodlist = implode(', ', $foodlist);

      
    	$data = array(
    		'name' => $request->name,
    		'email' => $request->email,
    		'phone' => $request->phone,
    		'location' => $request->location,
    		'ordertype' => $request->ordertype,
    		'foodlist' => $newfoodlist,
    		'totalprice' => $foodprice,
    		'status' => 'Pending'
    	);
    	Orders::create($data);
    	return redirect('/order')->with("addorder", "Order is created succesfully.");
    }


}
