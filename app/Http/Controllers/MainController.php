<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
  public function dashboard(){
    return view('dashboard.facade');
  }
  public function myblogs(){
    return view('dashboard.myblogs')->with('posts',auth()->user()->application);
  }
}