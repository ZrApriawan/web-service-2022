<?php

namespace App\Http\Controllers\API;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $data = Customer::all();
        return response()->json($data, 200);
    }

    // public function show(Customer $id){
    //     return response()->json($id, 200);
    // }

    public function show(Customer $id){
        return $id;
    }

    public function add(Request $request){
        return Customer::create($request->all());
    }

    public function destroy(Customer $id){
        $id->delete();
        return response()->json([
            'message' => 'data berhasil dihapus'
        ]);
    }

    public function update(Request $request, Customer $id){
        $id->update($request->all());
        return response()->json([
            'message' => 'data berhasil diUpdate',
            'data' => $id
        ]);
    }
}
