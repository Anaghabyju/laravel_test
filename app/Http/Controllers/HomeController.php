<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('register');
    }
    public function showlogin()
    {
        return view('showlogin');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'mobile'=>'required',
            'place'=>'required',
        ]);
       User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'mobile'=>$request->mobile,
        'place'=>$request->place,
       ]);
       return redirect()->route('register')->with('danger','successfully registerd');
    }
    public function login(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('showlogin')->with('danger','invalid email or password');
        }
    }
    public function dashboard()
    {
        $data=Auth::User();
        return view('dashboard',compact('data'));
    }
    public function edit($id)
    {
        $data=user::find($id);
        return view('edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $del=user::find($id);
        $del->name=$request->input('name');
        $del->email=$request->input('email');
        $del->place=$request->input('place');
        $del->mobile=$request->input('mobile');
        $del->update();
        return redirect()->route('dashboard')->with('danger','successfully updated');   
     }
}
