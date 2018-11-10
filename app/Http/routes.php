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


Route:: get('viewAlldownloadfile','DownloadController@downfunc');
Route::get('redirect',function(){
   return redirect()->route('viewAlldownloadfile');
});

Route::get('/uploadfile','UploadController@getView');
Route::post('/insertfile',array('as'=>'insertfile','uses'=>'UploadController@insertFile'));

/*
|start
*/
use App\User;
use Illuminate\Support\Facades\Input;

Route::post ( '/search', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
		$user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
		if (count ( $user ) > 0)
			return view ( 'search' )->withDetails ( $user )->withQuery ( $q );
		else
			return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
} );
/*
| end
*/
