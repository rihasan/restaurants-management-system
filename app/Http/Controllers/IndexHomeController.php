<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foodcategories;

class IndexHomeController extends Controller
{
    public function index()
    {
    	$foodcategories = Foodcategories::get();
    	return view('index', ['foodcategories'=>$foodcategories]);
    }
}
