<?php

namespace App\Http\Controllers;

use app\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/pegawai');
        }

        return \redirect('/login');
}
    public function logout(){ 
        Auth::logout();
        return \redirect('login');
    
}
}