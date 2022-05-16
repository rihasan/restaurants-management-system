<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foodcategories;

class MenuController extends Controller
{
    public function menu()
    {
    	$foodcategories = Foodcategories::get();
    	return view('menu', ['foodcategories'=>$foodcategories]);
    }
}
