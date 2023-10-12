<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        return view();
    }

    public function form() {
        return view('user.form');
    }

    public function dashboard(Request $request) {
        return view('user.dashboard');
    }
}