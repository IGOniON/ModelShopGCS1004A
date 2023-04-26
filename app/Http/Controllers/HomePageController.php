<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view('Customer.index');
    }
    public function products(){
        return view('Customer.products');
    }
    public function shoppingcart(){
        return view('Customer.shoppingcart');
    }
}
