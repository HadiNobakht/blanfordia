<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/get/users', function (Request $request) {
    return App\User::all();
});

Route::post('/get/user', function (Request $request) {
	dd('inn');
	if ($request->has('id')) {
		return App\User::find($request->get('id'));
	} else {
		return [
			'status' 	=> 'error' ,
			'message' 	=> 'ID is not avaialable' ,
		];
	}
});
