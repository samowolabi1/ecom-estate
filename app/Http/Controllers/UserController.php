<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Notifications\RequestMade;
use Illuminate\Support\Facades\Hash;
use Auth;
use Response;
use App\User;
use App\Role;
use App\Department;

class UserController extends Controller
{
    //

    public function index(){

    $users = User::paginate(10);
    $roles = Role::whereIn('id',[2,3])->get();
    $depts = Department::all();

    return view('pages.users.users',compact('users','roles','depts'));

    }




    public function store(Request $request)
    {


        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required'
            // 'role_id' => 'required'
        ]);
//return $request->all();  


        if ($validator->passes()) {

             User::create([
                
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'department_id' => $request['department_id'],
                'staffno' => $request['staffno'] ? $request['staffno'] : " ",
                'role_id' => 3,
                'status' => 'Inactive',
            ]);

        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }

        //return $request->all();
        
       return redirect()->route('users')->with('success','User Added Successfully');
    }


        public function edit($id){

        $user = User::find($id);
        $roles = Role::all();
        $depts = Department::all();

        return view('pages.users.edit',compact('user','roles','depts'));
    }

      public function show($id){

        $user = User::find($id);

        return view('pages.users.show',compact('user'));
      }


      public function editpro($id){

        $user = User::find($id);

        return view('pages.users.profile',compact('user'));
    }

     public function status(Request $request,$id){
        $user = User::find($id);
        $user->status = $request['status'];
        $user->update();

        return redirect()->route('users')->with('success','User Status Changed');
    }


    public function update(Request $request,$id){

       $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required'
        ]);

       $ruser = User::find($id);
       $rname = $ruser->name;
       $remail = $ruser->email;
       $rdepartment_id = $ruser->department_id;
       $rstaffno = $ruser->staffno;

       $rpassword = $ruser->password;
       $rrole_id = $ruser->role_id;
       $ractivate = $ruser->status;



        if ($validator->passes()) {

            //return $request->all();

            //return $request['email'];

            if ($request['name'] == '') {
                
               $name = $rname;
            }else{
                $name = $request['name'];
            }

            if ($request['password'] == '') {
                
               $password = $rpassword;
            }else{
                $password = $request['password'];
            }

             if ($request['role_id'] == '') {
                
               $role_id = $rrole_id;
            }else{
                $role_id = $request['role_id'];
            }

            if ($request['department_id'] == '') {
                
               $department_id = $rdepartment_id;

            }else{
                $department_id = $request['department_id'];
            }

            if ($request['staffno'] == '') {
                
               $staffno = $rstaffno;
            }else{
                $staffno = $request['staffno'];
            }

         

             $user = User::find($id);
             $user->name = $name;
             $user->email = $request['email'];
             $user->department_id = $department_id;
             $user->staffno = $staffno;
             $user->password =$password;
             $user->role_id = $role_id;
             $user->status =$ractivate;
             $user->save();


        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }

        //return $request->all();
        
       return redirect()->route('users')->with('success','User Updated Successfully');

     }



     public function proupdate(Request $request,$id){

       $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

       $ruser = User::find($id);
       $rname = $ruser->name;
       $remail = $ruser->email;



        if ($validator->passes()) {

            

            //return $request['email'];

            if ($request['name'] == '') {
                
               $name = $rname;
            }else{
                $name = $request['name'];
            }

           

             $user = User::find($id);
             $user->name = $name;
             $user->email = $request['email'];
             $user->save();


        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }

        //return $request->all();
        
       return redirect()->route('home')->with('success','Profile Updated Successfully');

     }







    public function destroy($id){
         
        $user = User::find($id);
        $user->delete();
       return redirect()->route('users')->with('success','User Succesfully Deleted');
    }

}
