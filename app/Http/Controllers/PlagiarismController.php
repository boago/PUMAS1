<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PlagiarismController extends Controller
{
    public function index(){
        return view('plagiarism_checker');
    }
    public function check(){
       

      
    	$file1= Input::file('file1');
        $file2= Input::file('file2');
    	$rules = array(
           
            'file1' => 'required|max:10000|mimes:doc,docx,jpeg,jpg,txt,pdf,zip'
            ); 
          
        
        
         $validator = Validator::make(Input::all(), $rules);

		  if ($validator->fails()) {

            // redirect our user back with error messages       
            $messages = $validator->messages();
		    // send back to the page with the input data and errors
		    return Redirect::to('plagiarism_chcker')->withInput()->withErrors($validator);

		  }else if ($validator->passes()){

		    // checking file is valid.
		    if (Input::file('filenam')->isValid()) {

		      //$destinationPath = 'images/profile/'; // upload path
		     $extension = Input::file('filenam')->getClientOriginalExtension(); // getting image extension
		    $filename = rand(11111,99999).'.'.$extension; // renameing image


		  // uploading file to given path

		    	//$destinationPath = '../uploads';//its refers proj/uploads
                $destinationPath = 'plagiarism_file';//its refers proj/public/up_file directry


                $data=array(
	
                   'file1' => $file1,
                    'file2' => $file2,
                    
                );




                $upload_success = $file->move($destinationPath, $file1,file2);
                $notification = array(
                    'message' => 'File Uploaded successfully!', 
                    'alert-type' => 'success'
                );

                return Redirect::to('plagiarism')->with($notification);

       
		    }
		    else {
		      // sending back with error message.
		      

                $notification = array(
                        'message' => 'uploaded file is not valid!', 
                        'alert-type' => 'error'
                    );

                return Redirect::to('uploadfile')->with($notification);
		    }
  		}

     /*   echo 'yes';
            $some = exec("python ..\cgi-bin\plagiarism.py $file2 $file2");
             echo $some;*/

    }
}
