<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function post(Request $request){

       $data= $request->validate([
            'name'=>"required",
            'email'=>"required",
            'password'=>"required",
            'gender'=>"required"

        ]);
$login=login::create($data);
return redirect()->route('create');

    }




}
