<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use App\Miner;

class PaymentController extends Controller
{
    
     public function index(){

    $payments = Payment::paginate(10);
    $users = User::all();
    $minings = User::all();


    return view('pages.payments.index',compact('payments','users','minings'));

    }

// 


    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'user_id' => 'required',
            'btc_paid' => 'required',
            'dummy_paid' => 'required',
            'trans_id' => 'required'
        ]);

        $user_id = User::find($request['user_id']);

        if ($validator->passes()) {

             Payment::create([
                'user_id' => $request['user_id'],
                'btc_paid' => $request['btc_paid'],
                'purpose' => $request['purpose'],
                'miner_id' => $request['miner_id'],
                'wallet_address' => $user_id->wallet_address,
                'dummy_paid' => $request['dummy_paid'],
                'trans_id' => $request['trans_id'],
            ]);

        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }

        //return $request->all();
        
       return redirect()->route('payments')->with('success','Payment Saved Successfully');
    }



        public function destroy($id){
         
        $payment = Payment::find($id);
        $payment->delete();
       return redirect()->route('payments')->with('success','Payment Succesfully Deleted');
    }

    
}
