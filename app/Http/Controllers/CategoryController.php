<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;

class CategoryController extends Controller
{
    
    public function index(){

    	 $categories = Category::paginate(10);

    	return view('pages.category',compact('categories'));
    }




    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->passes()) {

             Category::create([
                'user_id' => Auth()->id(),
                'name' => $request['name'],
            ]);

        }else {
            
            return redirect()->back()->with('error','Error Encountered');
        }

        //return $request->all();
        
       return redirect()->route('blog.create')->with('success','Category Added Successfully');
    }




    public function destroy($id){

        if ($id == 1 OR $id == 2 OR $id == 3) {
          
          return redirect()->back()->with('error','You cannot delete default Category');
        }
         
        $cat = Category::find($id);
        $cat->delete();
       return redirect()->route('blog.create')->with('success','Category Succesfully Deleted');
    }
}
