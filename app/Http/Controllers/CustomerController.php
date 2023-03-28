<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    function create(){
        $title = "Register here";
        $url = url('/customer');
        $data = compact('title','url');
        return view('customer-form')->with($data);
    }
    function saveData(Request $request){


        // $reqdata = $request->all();
        // $data = compact('reqdata');
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // echo $data['reqdata']['name'];
        // foreach($data as $dat){
        //     echo "hi" . $dat['name'];
        // }
        //return redirect('customer');
        $filename = time() . "-hr." . $request->file('fimage')->getClientOriginalExtension();
        // $customer = new Customer;
        // $customer->name=$request->name;
        // $customer->email=$request->email;
        // $customer->address=$request->address;
        // $customer->fimage=$filename;
        // $customer->phone=$request->phone;
        // $customer->gender=$request->gender;
        // $customer->save();
        Customer::create([
          'name' => $request->name,
          'email' => $request->email,
          'address' => $request->address,
          'fimage' => $filename,
          'phone' => $request->phone,
          'gender' => $request->gender
        ]);


        $request->file('fimage')->storeAs('public/uploads',$filename);
        //print($filename);
        return redirect(route('customer.view'))->with($filename);
    } 



    function fetchData(){
        $customers = Customer::all();
        $data = compact('customers');
        //print_r($display);
         //return view('customer-view')->with($data);
         return view('customer-view')->with($data);
       //return view('customer-view',["cold"=>$display]);
        
    }
    function trash($id){
        $customers = Customer::find($id);
        if(!is_null($customers)){
        $customers->delete();
        return redirect(route('customer.trashed'));
        }

    }

    function trashedData(){
      $customers = Customer::onlyTrashed()->get();
    
        foreach($customers as $customer)
        {
          if(!is_null($customer['id'])) 
          {
            //print_r($customers);
            // echo "</pre>";
            $data = compact('customers');
            return view('trashed-items')->with($data);
          }
          else
          {
            redirect(route('customer.create'));
          }

        } //foreach

  
    }

    function trashedRestore($id){
      $customers = Customer::onlyTrashed()->whereId($id);
      if(!is_null($customers)){
      $customers->restore();
      $data = $id. 'Data Restored Successfully';
      //$data = compact('customer');
      return redirect('customer/view')->with('success', $data);
      }
    }

    function forceDelete($id){
      $customers = Customer::onlyTrashed()->find($id);
      if(!is_null($customers)){
        $customers->forceDelete();
        return redirect(route('customer.trashed'));
      }
    }
    function edit($id)
    {

      $customer = Customer::find($id);

      if(is_null($customer)){
        return redirect('customer');
      }
      else{
      $title = "Update your Data";
      $url = url('customer/update') . "/" . $id;
      $data = compact('customer','title','url');

        return view('customer-form')->with($data);
      }
    }
    function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $filename = time() . "-hr." .$request->file('fimage')->getClientOriginalExtension();
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->address=$request['address'];
        $customer->fimage=$filename;
        $customer->phone=$request['phone'];
        $customer->gender=$request['gender'];
        $customer->save();

        $request->file('fimage')->storeAs('public/uploads',$filename);
        
        return redirect('customer/view');
    }


}
