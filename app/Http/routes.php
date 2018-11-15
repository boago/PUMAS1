<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('my-home', 'HomeController@myHome');

Route::get('my-users', 'HomeController@myUsers');


Route::get('userpage', 'UserPageController@index');
Route::resource('upload-files','FileController');

Route::get('studentpage', 'StudentPageController@index');

Route::get('lecturerpage', 'LecturerPageController@display');

Route:: get('viewAlldownloadfile','DownloadController@downfunc');
Route::get('redirect',function(){
   return redirect()->route('viewAlldownloadfile');
});

Route::get('/uploadfile','UploadController@getView');
Route::post('/insertfile',array('as'=>'insertfile','uses'=>'UploadController@insertFile'));
/*Route::get('/downloadfile/{data}',['uses' =>'FileDownloadController@down']);*/

Route::get('/downloadfile', 'FileDownloadController@down'
);
Route::get('/plagiarism_checker', 'PlagiarismController@index'
);
Route::get('/plagiarism_upload', 'PlagiarismController@check'
);
/*
|start
*/
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

Route::post ( '/search', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
		$find = DB::table('document') -> where ( 'author', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->orWhere ( 'file_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'file_type', 'LIKE', '%' . $q . '%' )->orWhere ( 'created_at', 'LIKE', '%' . $q . '%' )-> get ();
		if (count ( $find ) > 0)
			return view ( 'search' )->withDetails ( $find )->withQuery ( $q );
		else
			return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::post ( '/search1', function () {
	$q1 = Input::get ( 'q1' );
	if($q1 != ""){
		$find = DB::table('document') -> where ( 'author', 'LIKE', '%' . $q1 . '%' )->orWhere ( 'description', 'LIKE', '%' . $q1 . '%' )->orWhere ( 'file_title', 'LIKE', '%' . $q1 . '%' )->orWhere ( 'file_type', 'LIKE', '%' . $q1 . '%' )->orWhere ( 'created_at', 'LIKE', '%' . $q1 . '%' )-> get ();
		if (count ( $find ) > 0)
			return view ( 'home' )->withDetails ( $find )->withQuery ( $q1 );
		else
			return view ( 'home' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'home' )->withMessage ( 'No Details found. Try to search again !' );
} );
/*
| end
*/
