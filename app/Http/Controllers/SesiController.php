<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'email error',
            'password.required'=>'password wajib di isi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/dashboard');

        }else{
            return redirect('')->withErrors('username dan password yang dimaksukkan tidak sesuai')->withInput();
        }

    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
