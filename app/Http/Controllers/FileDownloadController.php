<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\View;
use Response;
use DB;

class FileDownloadController extends Controller
{
    public function down(Request $data){
     $string = app('request')->input('file_title');
        echo $string;
      $items=DB::table('document')->select('file_name')->where('file_title','=', $string) ->get();
        
   foreach ($items as $item){
       $filename= $item->file_name;
   
   
        
 $download = public_path().'/up_file/' . $filename;
        
           return response()->download ($download, basename($download));
   }
  /*      $filename ='x';
        return Response::make(base64_decode( $items->file_name), 200, [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' => 'inline; filename="'.$filename.'"',
]);*/

        
       /* return view ('downloadfile') ->with('data',$data);*/
        
        
    }
}
