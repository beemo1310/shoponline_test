<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('backend.auth.register');
    }

    public function register(RegisterRequest $request){
//        dd(1);

        $user = Admin::create($request->validated());

        Auth::login($user);

        return redirect('/')->with('success',"Successfully");
    }
}
