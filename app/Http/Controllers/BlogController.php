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

    public function hapus(Blog $id){
        $id -> delete();
        return redirect('data-blog');
    }

    public function rubah($id){
        $data = Blog::find($id);
        // dd($data);
        return view('blog/tampilin', compact('data'));
    }

    public function barui(Request $request, $id){
        $data = Blog::find($id);
        $data->update($request->all());

        return redirect('data-blog');
    }
}
