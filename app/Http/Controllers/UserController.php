<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // public function loginPage(){
    //     return view('pages.login');
    // }
    // public function signup(){
    //     return view('pages.signup');
    // }
    // public function dashboard(){
    //     return view('layout.login.app');
    // }

    // public function store( Request $request){
    //     $this->validate($request,[
    //         'name'=>'required|string|max:100',
    //         'email'=>'required|string|max:100|unique:users',
    //         'password'=>'required|max:100',
    //     ]);
    //     user::create([
    //         'name'=>$request->input('name'),
    //         'email'=>$request->input('email'),
    //         'password'=>hash::make($request->input('password')),

    //     ]);
    //     if(Auth::attempt($request->only('email','password'))){
    //         // return redirect()->route('home');
    //     }
    //     return redirect()->route('pages.signup')->withError('error');

    //     // return redirect()->route('user.login')->with('success', 'Registration successfully!');
    // }



}
