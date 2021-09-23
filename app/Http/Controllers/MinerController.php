<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Miner;
use Auth;
use App\User;
use App\Product;
use App\Category;
use App\Payment;


class MinerController extends Controller
{
    
     public function index(){

    $minings = Miner::paginate(10);
    $user = User::find(Auth()->id());

    return view('pages.minings.index',compact('minings','user'));

    }

    public function promine(){

    $minings = Miner::where('user_id',Auth()->id())->get();
    $payments = Payment::where('user_id',Auth()->id())->get();

    return view('pages.minings.me',compact('minings','payments'));

    }

    public function create(){

        $products = Product::all();
        $user = User::find(Auth()->id());
        $category = Category::inRandomOrder()->first();
        return view('pages.minings.create', compact('products','user','category'));
    }


    public function store(Request $request)
    {

        //return $request->all();
        $validator = \Validator::make($request->all(), [
            'user_id' => 'required',
            'product_id' => 'required'
        ]);

        $btc_paid = Product::find($request['product_id']); 

        if ($validator->passes()) {

             Miner::create([
                'user_id' => $request['user_id'],
                'product_id' => $request['product_id'],
                'wallet_address' => $request['wallet_address'],
                'btc' => $btc_paid->btc,
                'dummy_btc' => $btc_paid->btc,
            ]);

        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }

        //return $request->all();
        
       return redirect()->route('mining.create')->with('success','Mining Started Successfully');
    }
}
