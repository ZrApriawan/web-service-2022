<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $data = Blog::all();
        return view('blog/index', compact('data'));
    }
    public function create(){
        return view('blog/add');
    }

    public function input(Request $request){
        Blog::create($request->all());
        return redirect('data-blog');
    }
}
