<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function login()
    {
        return view("admin.login");
    }
    public function Authcheck(Request $request)
    {
        $request->validate([
            'email'=>'email|required',
            'password'=>'required'
        ]);
        if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->back()->with('danger','Email Və ya Şifrə Yalnışdır');
        }
        return redirect('/dashboard');
    }
    public function logout()
    {
        auth()->logout();
        return redirect("/admin");
    }

}
