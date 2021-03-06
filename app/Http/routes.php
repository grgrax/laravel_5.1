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
	dd('in');
	return view('welcome');
});


Route::get('env',function(){

	echo $environment = App::environment();
	echo $environment = app()->environment();

	//set
	config(['app.timezone' => 'America/Chicago']);
	echo $value = config('app.timezone');
	
	return "env page";
});



//Global Constraints better approach refer file
// /var/www/html/rax/laravel_5.1/app/Providers/RouteServiceProvider.php
Route::get('group/{id}',function($id){
	return "group id: $id number [0-9]+'";
});
Route::get('group/{slug}',function($slug){
	return "group slug: $slug alphabet [A-Za-z]+";
});


//group route with middleware
Route::group(['middleware' => 'auth','as' => 'admin::'], function () {
	Route::get('admin/dashboard', ['as' => 'dashboard', function () {
        // Route named "admin::dashboard"
	}]);
});
Route::group(['as'=>'donee::'],function(){
	Route::get('donee/dashboard',['as'=>'dashboard',function(){
		return "inside dashboard of donee";
	}]);
	Route::get('campaign',['as'=>'campaign',function(){
		return "inside dashboard of donee for campaign";
	}]);	
});


//here name is must if ? is not provided it will result to error
Route::get('group/{name?}', function ($name = 'John') {
	return $name;
});


//some front end routes
Route::get('/front',function(){
	$data['subView']='front/templates/index';
	$data['otherPages']=['about','gallery','news'];
	return View::make('front/layout',$data);
});


Route::get('/front/signup',function(){
	$data['subView']='front/templates/signup';
	$data['otherPages']=['about','gallery','news'];
	return View::make('front/layout',$data);
});


//auth
Route::get('/front/login',function(){
	$data['subView']='front/templates/login';
	$data['otherPages']=['about','gallery','news'];
	return View::make('front/layout',$data);
});

Route::post('/front/login',function(){
	$username=Input::get('username');
	$password=Hash::make(Input::get('username'));
	return "$username : $password";
});


// some blades
Route::group(['as'=>'blade::'],function(){
	//home, about
	Route::get('home',['as'=>'home',function(){
		return view('layouts/home');
	}]);
	Route::get('about',['as'=>'about',function(){
		return view('layouts/about');
	}]);

});


Route::group(['prefix' => 'dashboard','as' => 'dashboard::'], function () {
	Route::get('dashboard', ['as' => 'dashboard', function () {
		return view('admin/dashboard');
	}]);

	//post management
	// Route::get('users/banned', ['as' => 'admin.access.users.banned', 'uses' => 'UserController@banned']);
	Route::get('post', ['as' => 'post', 'uses'=>'PostController@index']);
	// Route::get('post/{slug}/edit',['as'=>'post_edit', function(App\Post $post)
	// {
	// 	dd($post);
	// 	// return print_r($post);
	// }]);
	Route::get('post/add', ['as' => 'post_create', 'uses'=>'PostController@create']);
	Route::post('post/add', ['as' => 'post_store', 'uses'=>'PostController@store']);
	Route::get('post/{slug}', ['as' => 'post_show', 'uses'=>'PostController@show']);
	Route::get('post/{slug}/edit', ['as' => 'post_edit', 'uses'=>'PostController@edit']);
	Route::post('post/{slug}/edit', ['as' => 'post_update', 'uses'=>'PostController@update']);
	Route::get('post/{slug}/delete', ['as' => 'post_destroy', 'uses'=>'PostController@destroy']);


	Route::resource('category', 'CategoryController');
	
});


