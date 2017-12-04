<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    
    public function newcode(){
        return view('admin.newcode');
    }

    public function create(Request $request){
        $create=Users::create($request->all());
        if($create){
            return('sukses');
        }
        else{
            return('Failed');
        }
    }

    public function indexcode(Request $request){
        $data['kode']=Users::all();
        return view('admin.indexcode',$data);
    }
}
