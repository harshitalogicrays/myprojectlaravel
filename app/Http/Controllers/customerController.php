<?php

namespace App\Http\Controllers;
use App\Models\Customers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(){
      $url=url('/customer');
      $customers=new Customers;
      $title="Register";
      $data=compact('customers','url','title');
        return view('customer')->with($data);
    }

    public function store(Request $request){
        // print_r($request->all());
        // p($request->all());
        // die;
        //Insert Query 
        $customer=new Customers;
        $customer->name=request('name');
        $customer->email=request('email');
        $customer->state=request('state');
        $customer->city=request('city');
        $customer->password=md5(request('password'));
        $customer->gender=request('gender');
        $customer->dob=request('dob');
        $customer->save();  
        return redirect('/customer/view'); 
          }

          public function view(Request $request){
            $search=$request['search']??'';
            if($search!=''){
              $customers=Customers::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
            }
            else
            {
            // $customers=Customers::all();
            $customers=Customers::paginate(15);
            }
            // print_r($customers);
            // die;

            $data=compact('customers','search');
            return view('customer-view')->with($data);
          
        }

          public function delete($id){
            // $customers=Customers::find($id)->delete();
            // return redirect('/customer/view'); 

            $customers=Customers::find($id);
            if(!is_null($customers)){
              $customers->delete();}
              return redirect('/customer/view'); 
          }

          public function edit($id){
            $customers=Customers::find($id);
            if(is_null($customers))
                return redirct('customer');
            else{
              $url=url('/customer/update/')."/".$id;
              $title="Update";
              $data=compact('customers','url','title');
              return view('customer')->with($data);
            }
             
          }

          public function update($id,Request $request){
            $customers=Customers::find($id);
            $customers->name=request('name');
            $customers->email=request('email');
            $customers->state=request('state');
            $customers->city=request('city');
            $customers->password=md5(request('password'));
            $customers->gender=request('gender');
            $customers->dob=request('dob');
            $customers->save();  
            return redirect('/customer/view'); 

          }
          

public function trash(){
  $customers=Customers::onlyTrashed()->get();
  $data=compact('customers');
  return view('customer-trash')->with($data);
}


public function restore($id){
  $customers=Customers::withTrashed()->find($id);
  if(!is_null($customers)){
    $customers->restore();}
    return redirect('/customer/view'); 
}

public function forcedelete($id){
  $customers=Customers::withTrashed()->find($id);
  if(!is_null($customers)){
    $customers->forceDelete();}
    return redirect('/customer/view'); 
}


}
