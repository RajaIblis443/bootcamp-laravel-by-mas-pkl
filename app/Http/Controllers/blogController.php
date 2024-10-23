<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Blogs;

class blogController extends Controller
{
    public function index(){
        $blogs = Blogs::all();
        return view('home', compact('blogs'));
    }

    public function blog(String $id){
        $blog = Blogs::where('id', $id)->first();
        return view('pages.detail', compact('blog'));
    }
}   
