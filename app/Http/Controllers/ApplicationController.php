<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Employees;

class ApplicationController extends Controller
{
    //

    public function applications()
    {
       $applications=Application::all();
    return view('new.applications',compact(['applications']));
    }
    public function apply()
    {
       
       return view('apply');
    }
    public function create(Request $request){
       Application::create([
           'firstname'=>$request ->firstname,
           'other_name'=>$request ->other_name,
           'gender'=>$request ->gender,
           'email'=>$request ->email,
           'dob'=>$request ->dob,
           'phone'=>$request ->phone,
           'speciality'=>$request ->speciality,

       ]);

       Alert::success('Success', 'Data has been saved successfully');
       return redirect()->back();
    }

    public function delete(Request $request){
       Application::where(['id'=>$request->id])->delete();
       Alert::success('Success','Applicant Has been rejected');
       return redirect()->back();
    }

    public function shiftdata(){
    $applications=Application::get();
    
    foreach($applications as $key =>$value) {
       Employees::create([
         'firstname'=>$value ->firstname,
           'other_name'=>$value ->other_name,
           'gender'=>$value ->gender,
           'email'=>$value ->email,
           'dob'=>$value ->dob,
           'phone'=>$value ->phone,
           'speciality'=>$value ->speciality,
       ]);
    }
    Alert::success('Success','Applicant has been hired');
    return redirect()->back();
   }
}
