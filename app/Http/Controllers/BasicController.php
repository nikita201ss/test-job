<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index() {
        return view('static.home');
    }

    public function login() {
        return view('static.login');
    }

    public function registration() {
        return view('static.reg');
    }

    public function create() {
        return view('static.create');
    }

    public function submit(Request $request) {
        $request->validate([
            'name'=> 'required',
            'message'=> 'required',
        ]);
    }





    
}
