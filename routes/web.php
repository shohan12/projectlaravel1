<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){

	return redirect()->route('login.index');
});

Route::get('/login/forgetp','loginController@forgetp')->name('login.forgetp');
Route::post('/login/forgetp/','loginController@preset')->name('login.preset');
Route::get('/login/{id}/preset','loginController@pas')->name('login.preset');
Route::post('/login/{id}/preset','loginController@uppass')->name('login.uppass');
//login -url
Route::get('/login','loginController@index')->name('login.index');
Route::post('/login','loginController@verify')->name('login.verify');

Route::group(['middleware'=>['session']],function(){

	Route::group(['middleware'=>['admin']],function(){

		//User-Create
		
		
		//User-Edit
		Route::get('/user/{id}/edit','userController@edit')->name('user.edit');
		Route::post('/user/{id}/edit','userController@update')->name('user.update');


		
		Route::get('/user/{id}/user','userController@user')->name('user.user');

		Route::get('/user/{id}/showProfile','userController@showp')->name('user.showProfile');
		Route::get('/user/{id}/editprofile','userController@edp')->name('user.editprofile');
		Route::post('/user/{id}/editprofile','userController@upd')->name('user.upd');
      
      
 

		//User-Delete
		Route::get('/user/{id}/delete','userController@delete')->name('user.delete');
		Route::post('/user/{id?}/delete','userController@destroy')->name('user.destroy');

       
	
	});
	//Route::get('/user/{id}/editprofile','userController@us')->name('user.editprofile');

    Route::get('/user/{id}/delete','userController@delete')->name('user.delete');
  Route::post('/user/{id?}/delete','userController@destroy')->name('user.destroy');
	Route::get('/user/{id}/edit','userController@edit')->name('user.edit');
	Route::post('/user/{id}/edit','userController@update')->name('user.update');
	Route::get('/user/user_search','userController@search')->name('user.user_search');
    Route::get('/user_search/action', 'userSearch@action')->name('user_search.action');
    Route::get('/user/faculty_search','userController@fsearch')->name('user.faculty_search');
    Route::get('/faculty_search/action', 'facultysearch@action')->name('faculty_search.action');
	//home-url
	//Route::get('/home','homeController@index')->name('home.index')->middleware('session');
	Route::get('/user/{id}/donate','userController@us')->name('user.donate');
     Route::post('/user/{id}/donate','userController@donates')->name('user.donates');
	Route::get('/home','homeController@index')->name('home.index');

	Route::get('/logout','logoutController@index')->name('logout.index');

	
	//User-Show
	Route::get('/user/{id}/show/','userController@show')->name('user.show');
    //Route::get('/user/{id}/show/','userController@show')->name('user.show');
  
});






    Route::get('/user/create','userController@create')->name('user.create');
	Route::post('/user/create','userController@store')->name('user.store');	
    


Route::resource('/admin','AdminController');