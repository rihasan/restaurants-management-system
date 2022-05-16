<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Foodcategories;

class DashMenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function dashmenu()
    {
        $categories = Foodcategories::get();
        $menutable = Menu::orderBy('id', 'DESC')->get();
    	return view('admin.dashmenu', ['categories'=>$categories, 'menutable'=>$menutable]);
    }
    


    public function addfood(Request $request)
    {
    	$image = $request->foodimage;
    	$new_name = rand().'.'.$image->getClientOriginalExtension();
    	$image->move('img/', $new_name);
    	$data = array(
    		'foodname' => $request->foodname,
	    	'fooddetails' => $request->fooddetails,
	    	'foodprice' => $request->foodprice,
	    	'foodcategory' => $request->foodcategory,
	    	'foodimage' => $new_name
    	);
    	Menu::create($data);
    	return redirect('/dashmenu')->with("addmenu", "Food is succesfully saved.");
    }



    public function addcategory(Request $request)
    {
        $data = array(
            'category' => $request->category
        );
        Foodcategories::create($data);
        return redirect('/dashmenu')->with("doaddcategory", "Category is succesfully added.");
    }


    public function editmenu(Request $request)
    {
        $image = $request->foodimage;
        $menuid = $request->menuid;
        $oldimg = $request->oldimg;

        if(isset($image))
        {
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move('img/', $new_name);
            $data = array(
                'foodname' => $request->foodname,
                'fooddetails' => $request->fooddetails,
                'foodprice' => $request->foodprice,
                'foodcategory' => $request->foodcategory,
                'foodimage' => $new_name
            );
            unlink('img/'.$oldimg);

            Menu::where('id', $menuid)->update($data);
            return redirect('/dashmenu')->with('doeditmenu', "Menu is succesfully updated.");
        }
        else
        {
            $data = array(
                'foodname' => $request->foodname,
                'fooddetails' => $request->fooddetails,
                'foodprice' => $request->foodprice,
                'foodcategory' => $request->foodcategory,
                'foodimage' => $oldimg
            );

            Menu::where('id', $menuid)->update($data);
            return redirect('/dashmenu')->with('doeditmenu', "Menu is succesfully updated.");
        }
    }

    public function removemenu($id){
             $foods = Menu::find($id);

        unlink('img/'.$foods->foodimage);

        Menu::where('id', $id)->delete();
          return redirect('/dashmenu')->with("menufoodr", "Food is successfully Removed");
    }
}
