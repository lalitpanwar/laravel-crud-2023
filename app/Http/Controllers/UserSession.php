<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSession extends Controller
{
    function storeS(Request $req){

        $data = $req->input('user');

        $req->session()->put('user',$data);
        return redirect('profile');

    }
}
