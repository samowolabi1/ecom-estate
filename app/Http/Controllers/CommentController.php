<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Ticket;
use Auth;

class CommentController extends Controller
{
    
    public function index($id){

        $ticket = Ticket::find($id);
        $comment = Comment::orderBy('id','desc')->where('ticket_id',$id)->get();

        


        if ($ticket->support_id == 1 || $ticket->support_id == '') {
            
            return redirect()->back()->with('error','Please Assign Support');
        }
        
        //return $comment;

        return view('pages.messages.index',compact('ticket','comment'));
    }


     public function store(Request $request){


          $validator = \Validator::make($request->all(), [
          
            'message' => 'required',
        ]);



            

         $ticket = Ticket::find($request['ticket_id']);


        if ($ticket->support_id == 1 ) {
            
            return redirect()->back()->with('error','Please Assign Support');
        }




         if ($request['sender_id'] == $ticket->user_id ) {

            

        if ($validator->passes()) {

             Comment::create([
                'ticket_id' => $request['ticket_id'],
                'user_id' => $request['sender_id'],
                'message' => $request['message'],
                'status' => 'Ongoing',
            ]);

        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }
          
            
         }elseif($request['sender_id'] != $ticket->user_id){

     
            $supportid = (int)$request['sender_id'];


        if ($validator->passes()) {

             Comment::create([
                'ticket_id' => $request['ticket_id'],
                'support_id' => $request['sender_id'],
                'message' => $request['message'],
                'status' => 'Ongoing',
            ]);

        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }


         }
         



        // return $request->all();
        
       return redirect()->back()->with('success','Message Sent Successfully');
    }

}
