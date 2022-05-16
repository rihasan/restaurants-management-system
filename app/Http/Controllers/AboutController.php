<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Orders;

class AboutController extends Controller
{
    public function about()
    {
    	$fooditems = count(Menu::get());
    	$orders = count(Orders::where('status', 'confirm')->get());
    	return view('about', ['fooditems' => $fooditems, 'orders' => $orders]);
    }
}
