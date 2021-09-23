<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Auth;

class ProductController extends Controller
{
    public function index(){

    	
        $products = Product::paginate(12);

    	return view('pages.products.index',compact('products'));
    }


      public function store(Request $request)
    {

    	//return $request->all();
       
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'btc' => 'required',
            'btc_min' => 'required',
            'btc_day' => 'required',
            'affilliate_bonus' => 'required'
        ]);

        if ($validator->passes()) {

             Product::create([
                'user_id' => Auth::id(),
                'status' => "Active",
                'name' => $request['name'],
                'btc' => $request['btc'],
                'btc_min' => $request['btc_min'],
                'btc_day' => $request['btc_day'],
                'affilliate_bonus' => $request['affilliate_bonus']
            ]);

        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }

        //return $request->all();
        
       return redirect()->route('products')->with('success','Product Added Successfully');
    }


       public function show($id, Request $request)
    {
        $product = Product::find($id);

         
        return view('pages.products.show',compact('product'));
    }

       public function edit($id, Request $request)
    {
        $product = Product::find($id);

         
        return view('pages.products.edit',compact('product'));
    }


        public function destroy($id){
         
        $product = Product::find($id);
        $product->delete();
       return redirect()->route('products')->with('success','Product Succesfully Deleted');
    }


    public function update($id, Request $request)
    {
        $user = Product::find($id);

         $this->validate($request, [
            'role_id'=>'required'
        ]);

         $user->role_id = $request->input('role_id');
         $user->save();

        return redirect()->back()->with('success','Product Role Updated');
    }


      public function activate($id, Request $request)
    {
        $product = Product::find($id);

         $this->validate($request, [
            'status'=>'required'
        ]);

         $product->status = $request->input('status');
         $product->save();

        return redirect()->back()->with('success','Product Updated succesfully');
    }

         public function stock($id, Request $request)
    {
        $peoduct = Product::find($id);

         $this->validate($request, [
            'stocking'=>'required'
        ]);

         $peoduct->stocking = $request->input('stocking');
         $peoduct->save();

        return redirect()->back()->with('success','Product Updated succesfully');
    }
}
