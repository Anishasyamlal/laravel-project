<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\User;
class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function home(){
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function user_signup(){
        return view('user_signup');
    }
  public function save_user(){
    $name=request('name');
    $email=request('email');
    $phno=request('phno');
    $username=request('username');
    $password=request('password');
    User::create([
        'login_id'=>"1",
        'name'=>$name,
        'email'=>$email,
        'contact_number'=>$phno,
        'username'=>$username,
        'password'=>$password,
    ]);

  }
}
