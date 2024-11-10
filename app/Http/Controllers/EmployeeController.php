<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    //
    public function index()
    {
       $employees=Employees::all();
    return view('employees.index',compact(['employees']));
    }
  
    public function delete(Request $request){
        Employees::where(['id'=>$request->id])->delete();
        Alert::success('Success','Employee has been fired');
        return redirect()->back();
     }
   
}

 