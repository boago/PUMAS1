<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\AuthController;
//use DB;



class LecturerPageController extends Controller
{
    public function display()
    {
        $name = Auth::user()->name;
        $email=Auth::user()->email;
        $parts=explode("@", $email);
        $id=$parts[0];
        $items=DB::table('document')->select('author','file_title','description')->where('Id', $id) ->get();
        return view('lecturerpage',compact('items'));
    }
}
