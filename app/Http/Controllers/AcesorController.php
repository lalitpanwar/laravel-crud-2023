<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class AcesorController extends Controller
{
    //

    // function indexAcessor(){

    //     $emp = employee::all();
    //     //return $employee;
    //     // $employee = new Employee;
    //     // $employee->name="Rahul Gandhi";
    //     // $employee->email="rahulgandhi@gmail.com";
    //     // $employee->phone="9716621708";
    //     // $employee->save();
    //     // return "data Saved";
    //     return $emp;
    //     //return view('acesor', ['emp' => $emp]);

    // }
    
    function indexMutator(){

        $employee = new Employee;
        $employee->name="Rahul Gandhi";
        $employee->email="rahulgandhi@gmail.com";
        $employee->phone="9716621708";
        $employee->save();
        return "data Saved";  

    }
}
