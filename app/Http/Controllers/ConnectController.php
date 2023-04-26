<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function register(){
        return view('Connect.register');
    }
    public function login(){
        return view('Connect.login');
    }
}
