<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;



class ApiController extends Controller
{
    //
    function index(){

        return [
            'message' => "Ok Work",
            'status' => "Second Perameter"
        ];
    }
    function apiGetData($id=null){
          $datawithid = Customer::find($id);
          $alldata = Customer::all();
          $data = $id?$datawithid:$alldata; 

          return response()->json($data);

    }
    function insertDataApi(REQUEST $req){

    //Json Format to Insert Data
    // {
    //     "created_at": "2023-03-16T03:55:34.000000Z",
    //     "updated_at": "2023-03-17T07:46:23.000000Z",
    //     "name": "Ram Gopal Verma",
    //     "email": "sdsddsas@gmail.com",
    //     "address": "Sihani",
    //     "fimage": "1678938985-hr.jpeg",
    //     "phone": "7042757874",
    //     "gender": "O",
    //     "deleted_at": null 
    // }

    $rules = array(
        "name" => "required",
        "email" => "required",
        "address" => "required",
        "phone" => "required",
        "gender" => "required"
    );

    $validate = Validator::make($req->all(), $rules);
    if($validate->fails()){

        return response()->json($validate->errors(), 406);
    }
    else{
        $result = Customer::create(
            [
                'name' => $req->name,
                'email' => $req->email,
                'address' => $req->address,
                'phone' => $req->phone,
                'gender' =>$req->gender
            ]);
            if($result){
            return ["message" => "Data Saved"];
            }
            else{
                return ["message" => "Failed To saved Data"];
            }

    }



    }

    function UpdateApiData(REQUEST $request){

        $customers = Customer::find($request->id);
        $customers->name = $request->name;
        $customers->gender = $request->gender;
        $customers->save();
        //$req = $request->all();
        //$customers->update($req);
 //Note i am facing issue to update data using body > raw json
 //Solution
 //{"id":23,"name":"Ram Gopal Verma","gender":"O"}
        return ["results" => $request->id];

    }

    function DeleteApiData(REQUEST $req){
        $customers = Customer::withTrashed()->find($req->id);
        $results = $customers->forceDelete();

        if($results){
            return ["message" => $req->id . "has Been Deleted"];
        }
        else{
            return ["message" => $req->id . "Either Not Found or Failed to Delete"];
        }

    }

    function uploadApiFile(Request $req){

        $filename = time() . "-api." . $req->file('fimage')->getClientOriginalExtension();
        $uploadfile = $req->file('fimage')->storeAs('apidocs', $filename);

        if($uploadfile){

            return ["results" => $uploadfile."File Uploaded Succesfully"];
        }
        else{
            return ["results" => "failed to upload"];
        }

    }
}
