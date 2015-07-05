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

Route::get('about',function(){

	echo $environment = App::environment();
	echo $environment = app()->environment();

	//set
	config(['app.timezone' => 'America/Chicago']);
	echo $value = config('app.timezone');
	
	return "about page";
});

Route::get('category/{id}',function($id){
	return "get post of category $id";
});

Route::get('post/images/{title?}',function($title='cover_pic'){
	return "get image/images of post $title";
});

//regular expression
Route::get('article/{id}',function($id){
	return "article id: $id number [0-9]+'";
})->where('id','[0-9]+');

Route::get('article/{slug}',function($slug){
	return "article slug: $slug alphabet [A-Za-z]+";
})->where('slug','[A-Za-z]+');

//Global Constraints better approach refer file
// /var/www/html/rax/laravel_5.1/app/Providers/RouteServiceProvider.php
Route::get('group/{id}',function($id){
	return "group id: $id number [0-9]+'";
});

Route::get('group/{slug}',function($slug){
	return "group slug: $slug alphabet [A-Za-z]+";
});

//named route
Route::get('category/post/date/images/top3',['as'=>'top3',function(){
	return "top 3 images for any date of post under category";
}]);

//group route with middleware
Route::group(['middleware' => 'auth','as' => 'admin::'], function () {
	Route::get('dashboard', ['as' => 'dashboard', function () {
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

Route::get('user/{id}/profile', ['as' => 'profile', function ($id) {
    //
}]);

Route::get('user/profile', [
	'as' => 'profile', 'uses' => 'Profile\UserController@showProfile'
	]);


Route::get('frontend/',function(){
	
	// return $url = route('top3');
	// return $url = route('donee::dashboard');
	return $url = route('donee::campaign');

	// return $url = route('profile', ['id' => 1]);
	
	return View::make('front/main');
});


//prefix route
Route::group(['prefix' => 'admin'], function () {
	Route::get('users', function ()    {
		echo "Matches The /admin/users URL";
	});
});

Route::get('/jpt',function(){
	return abort(404);
});

//custom middleware
Route::get('/senior_citizen',['middleware' => 'age',function(){
	return "only for senior citizen";
}]);



//some front end routes
Route::get('/front',function(){
	$data['subView']='front/templates/index';
	$data['otherPages']=['about','gallery','news'];
	return View::make('front/layout',$data);
});

Route::get('/front/category',function(){
	$data['categories']=['uncategoried','beauty','fitness'];
	$data['subView']='front/templates/category';
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

Route::get('/front/secret',array(
	'before'=>'auth.basic',
	function()
	{
		return "inside  secret";
	}
	));

// frontend group route
Route::group(['as' => 'fronend::'], function () {
	Route::get('frontend/group', ['as' => 'group', function () {
        // Route named "frontend::dashboard"
	}]);
	Route::get('frontend/group/add', ['as' => 'group', function () {
        // Route named "frontend::dashboard"
	}]);
	Route::get('frontend/group/{slug}', ['as' => 'group', function () {
        // Route named "admin::dashboard"
	}]);
});

