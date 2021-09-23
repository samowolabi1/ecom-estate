<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact as MailContact;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
      public function index(){

    	$contacts = Contact::paginate(10);
    	$i = 0;

    	return view('contact.index',compact('contacts','i'));
    }

    public function store(Request $request){

        //return $request->all();

    	$validated = $request->validate([

    	'name' => 'required',
        'email' => 'required',
    	'subject' => 'required',
    	'message' => 'required'
    	]);

         Contact::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'subject' =>$request['subject'],
                'message' =>$request['message']
            ]);

        $conmessage = $request['message'];

        Mail::to('cryptolawafrica@gmail.com')->send(new MailContact($conmessage));

        //Mail::to('cryptolawafrica@gmail.com')->send(new Email($message));


    
         return redirect()->route('contact')->with('success','Message Sent Succesfully');
    }
}
