<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;

class PagesController extends Controller
{
    //


    public function index(){

        

    	return view('welcome');
    }


    public function interview(){

        $blogs = Blog::orderBy('id','desc')->where('category_id','2')->paginate(12);


    	return view('pages.interview',compact('blogs'));
    }


    public function publication(){

        $blogs = Blog::orderBy('id','desc')->where('category_id','1')->paginate(12);

    	return view('pages.publication',compact('blogs'));
    }

    public function news(){

        $blogs = Blog::orderBy('id','desc')->where('category_id','3')->paginate(12);

    	return view('pages.news',compact('blogs'));
    }

     public function about(){



        return view('pages.about');
    }

     public function property(){



        return view('pages.property');
    }

     public function showp(){



        return view('pages.showp');
    }

   

    public function contact(){



    	return view('pages.contact');
    }

     public function blog(){



        return view('pages.blog');
    }

     




}
