<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Auth\AuthController;


//use DB;



class AdminController extends Controller
{
    public function display()
    {
        $name = Auth::user()->name;
        $users=DB::table('users')->select('name','email') ->get();
        return view('lecturerpage',compact('users'));
    }
}
