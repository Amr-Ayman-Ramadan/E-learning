<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("admin.login");
    }

    public function do_login(Request $request)
    {
        $data = $request->validate([

            "email"=>"required|email",
            "password" => "required|string"
        ]);
        Auth::attempt(["email"=>$data["email"],"password"=> $data["password"]]);
        return view("admin.index");
    
    }

    public function logout()
    {
        Auth::logout();
        return view("admin.login");
    }



}
