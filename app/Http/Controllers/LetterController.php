<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;
// use RealRashid\SweetAlert\Facades\Alert;

class LetterController extends Controller
{
        public function index(){

    	$letters = Letter::paginate(15);

    	//return $letters;
    	$i = 0;

    	return view('letters.index',compact('letters','i'));
    }


    public function store(Request $request){

    	//return $request->all();

    	$validated = $request->validate([

    		  'email' => 'required'
    	]);

    	       
         Letter::create([
                'email' => $request['email']
            ]);
    
         return redirect()->back()->with('success','Succesfully Subscribed');
    }
}
