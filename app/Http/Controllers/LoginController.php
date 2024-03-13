<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('frontend.auth.login');
    }

    // function request berfugsi untuk menangkap nilai name dari inputan form
    public function login(Request $r){

    }
}
