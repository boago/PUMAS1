<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\AuthController;
//use DB;



class StudentPageController extends Controller
{
    public function index()
    {
        $name = Auth::user()->name;
        $email=Auth::user()->email;
        $parts=explode("@", $email);
        $id=$parts[0];
<<<<<<< HEAD
        $items=DB::table('document')->select('author','file_title','description')->where('id', $id) ->get();
=======
        $items=DB::table('document')->select('author','file_title','description')->where('Id', $id) ->get();
>>>>>>> ec8c2dfc985de2ddb47c831a8609f0620228389e
        return view('studentpage',compact('items'));
    }
}
