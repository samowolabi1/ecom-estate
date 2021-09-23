<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Response;
use App\User;
use App\Blog;
use App\Category;

class BlogController extends Controller
{
        public function index(){

    	$blogs = Blog::orderBy('id','desc')->paginate(13);
      $cats = Category::orderBy('id','desc')->paginate(13);
      $i = 0;

    	return view('blogs.index',compact('blogs','i','cats'));
    }


      public function create(){

      $blogs = Blog::paginate(13);
        $cats = Category::orderBy('id','desc')->take(10)->get();
        $i = 0;

      return view('blogs.create',compact('blogs','i','cats'));
    }

    public function show($id){

    	$post = Blog::find($id);  


    	return view('pages.bshow',compact('post'));
    }

    public function store(Request $request){

        

    	$validated = $request->validate([

    		'title' => 'required',
        'category_id' => 'required',
    		'image' => 'required',
    		'content' => 'required',
    		'tags' => 'required'
    	]);

    	//return $request->all();

    	 
          	$data = $request->input('image');
            $photo = $request->file('image')->getClientOriginalName();
            $destination = base_path() . '/public/banners';
            $request->file('image')->move($destination, $photo);
        
         Blog::create([
         		'user_id' => Auth::id(),
                'category_id' => $request['category_id'],
                'title' => $request['title'],
                'image' => $photo, //$blogImage,
                'content' => $request['content'],
                'tags' =>$request['tags']
            ]);
    
         return redirect()->route('blog')->with('success','Post Created Succesfully');
    }

    public function edit($id){

      //return $id;

    	$blog = Blog::find($id);
       $cats = Category::all();

    	return view('blogs.edit',compact('blog','cats'));
    }

    public function update(Request $request, $id){

      $oblog = Blog::find($id);

     //  return $request->all();

    	// $validated = $request->validate([

    	// 	'title' => 'required',
    	// 	'image' => 'required',
    	// 	'content' => 'required',
    	// 	'tags' => 'bail|required',
    	// ]);

    	if($request['image'] == ''){
      $blogImage = $oblog->image;
      }else{  
      $file = $request->file('image');
      $destinationPath = public_path('/blog_images/');       
      $blogImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
      $file->move($destinationPath, $blogImage);
       }

       if ($request['title'] == '') {
         $blogtitle = $oblog->title;
       }else{
        $blogtitle = $request['title'];
       }

        if ($request['content'] == '') {
         $blogcontent = $oblog->content;
       }else{
        $blogcontent = $request['content'];
       }

        if ($request['tags'] == '') {
         $blogtags = $oblog->tags;
       }else{
        $blogtags = $request['tags'];
       }

      $blog = Blog::find($id);
      $blog->user_id = Auth::id();
			$blog->title = $blogtitle;
			$blog->image = $blogImage;
			$blog->content = $blogcontent;
			$blog->tags = $blogtags;
			$blog->save();
    
         return redirect()->route('blog')->with('success','Post Updated Succesfully');
    }

       public function destroy(Request $request, $id){

       
        $cat = Blog::find($id);
        $cat->delete();
       return redirect()->route('blog')->with('success','Post Succesfully Deleted');

    }
}
