<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function index(){
        return view('index');
    }

    // Login
    public function login(){
        return view('login');
    }
}
