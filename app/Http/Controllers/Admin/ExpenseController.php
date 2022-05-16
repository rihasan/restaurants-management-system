<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Expenses;
use App\Expensecategories;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function expense()
    {
    	$expenses = Expenses::get();
    	$expensecategories = Expensecategories::get();
    	return view('admin.expense', ['expenses'=>$expenses, 'expensecategories'=>$expensecategories]);
    }



    public function doaddexpense(Request $request)
    {
    	$data = array(
    		'category' => $request->category,
    		'amount' => $request->amount,
    		'date' => $request->date
    	);
    	Expenses::create($data);
    	return redirect('/expense')->with('addexpense', 'Expense added succesfully');
    }



    public function doaddexpensecategories(Request $request)
    {
    	$data = array(
    		'category' => $request->category
    	);
    	Expensecategories::create($data);
    	return redirect('/expense')->with('addexpensecategories', 'Expense Category added succesfully');
    }

    public function removeexpense($id){
      Expenses::where('id', $id)->delete();
          return redirect('/expense')->with("deleteexpense", "Expense is successfully Removed");
    }

        public function editexpense(Request $request)
    {
         $id = $request->exid;
        $data = array(
            'category' => $request->category,
            'amount' => $request->amount,
            'date' => $request->date
        );
        Expenses::where('id', $id)->update($data);
        return redirect('/expense')->with('updateex', 'Expense Update succesfully');
    }
}
