<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;
use App\Models\SiswaModel;


class Authcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['login', 'putslogin']]);
    }

    public function login()
    {
        return view('auths.login');
    }

    public function putslogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard'); 
        }
        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
