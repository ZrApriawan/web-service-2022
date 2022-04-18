<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){

        $data = Mahasiswa::all();
        return view('mahasiswa/index', compact('data'));
    }
    
    public function create(){
        return view('mahasiswa/add');
    }
    
    public function save(Request $request){

        $this-> validate($request, [
        'nim' => 'required|unique:mahasiswa',
        'nama_mahasiswa' => 'required|min:5',
        'umur' => 'required|numeric',
        'smester' => 'required|numeric'
    ]);

        Mahasiswa::create($request->all());
        return redirect('data-mahasiswa');
    }

    public function destroy(Mahasiswa $id){
        $id -> delete();
        return redirect('data-mahasiswa');
    }
}
