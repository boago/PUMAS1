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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('my-home', 'HomeController@myHome');

Route::get('my-users', 'HomeController@myUsers');

Route::get('/uploadDocument', 'DocumentController@index');
Route::post('/uploadDocumnet', 'DocumentController@showUploadDocument');

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