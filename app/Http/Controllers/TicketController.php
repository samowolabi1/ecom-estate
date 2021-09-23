<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Ticket;
use App\User;
use App\Support;

class TicketController extends Controller
{
    
    public function index(){

        $tickets = Ticket::orderBy('id','desc')->paginate(12);
        
        return view('pages.tickets.index',compact('tickets'));
    }


    public function store(Request $request){



          $validator = \Validator::make($request->all(), [
            'subject' => 'required|max:255',
            'category' => 'required',
            'details' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);




            $data = $request->input('image');
            $photo = $request->file('image')->getClientOriginalName();

            $fileNameToStore = time().$photo;
            $destination = base_path() . '/public/images';
            $request->file('image')->move($destination, $fileNameToStore);

             





        // if ($validator->passes()) {

           // return $request->all();

             Ticket::create([
                
                'user_id' => Auth::id(),
                'support_id' => 1,
                'subject' => $request['subject'],
                'category' => $request['category'],
                'details' => $request['details'],
                'priority' => $request['priority'],
                'image' => $fileNameToStore,
                'status' => 'Waiting for Support',
            ]);

        // }else {
            
        //     return redirect()->back()->with('error','Error Encountered');
        // }

        //return $request->all();
        
       return redirect()->route('tickets')->with('success','Ticket Sent Successfully');
    }

    public function show($id){

        $ticket = Ticket::find($id);
        $supports = Support::all();

        return view('pages.tickets.show',compact('ticket','supports'));

    }

    public function cstatus(Request $request,$id){

        $ticket = Ticket::find($id);

        if ($ticket->support_id == 1 || $ticket->support_id == '') {
            
            return redirect()->back()->with('error','Please Assign Support');
        }

        $ticket->status = $request->input('status');
        $ticket->save();


        return redirect()->back()->with('success','Ticket Status Changed');

    }


        public function support(Request $request,$id){

        $ticket = Ticket::find($id);

        $ticket->support_id = $request->input('support_id');
        $ticket->save();


        return redirect()->back()->with('success','Support Assigned to Ticket');

    }
}
