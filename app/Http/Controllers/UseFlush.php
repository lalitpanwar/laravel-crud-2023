<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseFlush extends Controller
{
    
function lp_flushdata(Request $req){
    //return $req->input();
    $data = $req->input('user');
    $req->session()->flash('user',$data);
    return redirect('store');

}

}
