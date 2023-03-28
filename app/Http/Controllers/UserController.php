<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    // function show ($id){
    //     return $id . "Hello from UserController";
    // }

    // function loadview_foreach(){
    //     $data=['anil', 'rohit','bhati'];
    //     return view("foreach",["users"=>$data]);
    // }
    // function loadview_ifcheck(){
    //     //$data=['anil'];
    //     return view("foreach",["namy"=>['rahul']]);
    //     //return "Hello from UserController";
    // }

    // function getData(){
      
    //     $data = User::all();

    //     return view('displaydata',["collection"=>$data]);

    // }

    // function index(){
     
    //     $data = Http::get('https://reqres.in/api/users?page=1');
    //     //return Http::get('https://reqres.in/api/users?page=1');

    //     return view('apidata',['data'=>$data['data'], 'support'=>$data]);

    // }

    // function insData(Request $req){
    //     $data = new User;
    //     $data->name=$req->name;
    //     $data->email=$req->email;
    //     $data->phone=$req->phone;
    //     $data->save();
    //     //return redirect('insd');
    //     return redirect('insd');

    // }
}
