<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpControllerApi extends Controller
{
    //
    function getDataApiURL(){

        //$httpreq = Http::get('https://reqres.in/api/users?page=1');
        $httreq = Http::get('https://smartholidayshop.com/wp-json/wp/v2/pages/')->json();
        //$jsondeco = json_decode($httpreq, true);
        //$data = compact('httpreq');
        //echo "<pre>";
        //print($jsondeco);
        //echo "</pre>";
        return view('apidate-view',["collection" => $httreq]);

    }
}
