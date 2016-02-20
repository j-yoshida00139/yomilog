<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(){
        $inputs = \Request::all();
        
    }
    
    public function index(){
        $users = User::all();
        return view('users/index', compact('users'));
    }
    public function signup(){
        return view('signup');
    }
    public function add(){
        $inputs = \Request::all();
        User::create($inputs);
        return redirect('/');
    }
}
