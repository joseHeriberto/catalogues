<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user= User::all();
        return view('user.usuarios', ['users'=>$user]);
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request){
        $user= new User();

        $user->name=request('name');
        $user->email=request('email');
        $user->password=request('password');

        $user->save();

        return redirect('/usuarios');
    }

    public function phone()
    {
        return view('phone');
    }
    public function phoneSo()
    {
        return view('phoneSo');
    }
    public function console()
    {
        return view('console');
        
    }
    public function xbox()
    {
        return view('consoleXbox');
        
    }public function ps()
    {
        return view('consolePs');
        
    }
    public function brand()
    {
        return view('phoneBrand');
    }
    public function camera()
    {
        return view('phoneCamera');
    }
    public function system()
    {
        return view('phoneSystem');
    }
    public function motorola()
    {
        return view('phoneMotorola');
    }
    public function samsung()
    {
        return view('phoneSamsung');
    }
    public function huawei()
    {
        return view('phoneHuawei');
    }
    public function operative()
    {
        return view('phoneSo');
    }
    public function android()
    {
        return view('phoneAndroid');
    }
    public function ios()
    {
        return view('phoneIos');
    }
    
    
}
