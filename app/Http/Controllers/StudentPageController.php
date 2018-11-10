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
        $email=Auth::user()->email;
        $parts=explode("@", $email);
        $id=$parts[0];
        $items=DB::table('document')->select('author','file_title','description')->where('student_number', $id) ->get();
        return view('studentpage',compact('items'));
    }
}
