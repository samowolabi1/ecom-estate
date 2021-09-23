<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
      public function index(){

    	 $customers = Customer::paginate(10);

    	return view('pages.customer',compact('customers'));
    }




    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'address' => 'required'
        ]);

        if ($validator->passes()) {

             Customer::create([
                'name' => $request['name'],
                'phone_number' => $request['phone_number'],
                'address' => $request['address'],
            ]);

        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }

        //return $request->all();
        
       return redirect()->route('customers')->with('success','Customer Added Successfully');
    }




    public function destroy($id){
         
        $cust = Customer::find($id);
        $cust->delete();
       return redirect()->route('customers')->with('success','Customer Succesfully Deleted');
    }
}
