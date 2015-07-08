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

Route::get('env',function(){

	echo $environment = App::environment();
	echo $environment = app()->environment();

	//set
	config(['app.timezone' => 'America/Chicago']);
	echo $value = config('app.timezone');
	
	return "env page";
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

// frontend category route
Route::group(['as' => 'frontend::'], function () {
	Route::get('category', ['as' => 'categories', function () {
		// $data['subView']='front/templates/category/index';
		// $data['otherPages']=['about','gallery','news'];	
		// return View::make('front/layout',$data);
		// return view('front.layout',$data); 

		$data['categories']=array(
			array('slug'=>'gallery','desc'=>'gallery description'),
			array('slug'=>'inspiration','desc'=>'inspiration description'),
			array('slug'=>'art','desc'=>'art description'),
			);
		return view('layouts/categories',$data);

		// return view('front/layout',$data); 
	}]);
	Route::get('category/{slug}', ['as' => 'category', function ($slug) {

		$data['category']=array('slug'=>'gadgets','desc'=>'all description');
		View::share('data',$data); 
		return view('layouts/category',$data);
	}]);
	Route::get('category/{slug}/posts', ['as' => 'category_posts', function () {
		$data['subView']='front/templates/category';
		$data['otherPages']=['about','gallery','news'];
		$data['category']=array('slug'=>'gadgets','desc'=>'all description');
		$data['posts']=array(
			array('slug'=>'samsung','desc'=>'all description'),
			array('slug'=>'dell','desc'=>'all description'),
			array('slug'=>'apple','desc'=>'all description'),
			);
		return view('front/layout',$data); 
	}]);
});


// some blades
Route::group(['as'=>'blade::'],function(){
	
	// Route::get('blade',['as'=>'blade_layout',function(){
	// 	// return "blade_layout";
	// 	return view('layouts/blade_layout');
	// }]);
	// Route::get('blade/header',['as'=>'blade_header',function(){
	// 	return "blade_header";		
	// }]);
	// Route::get('blade/footer',['as'=>'blade_footer',function(){
	// 	return "blade_footer";		
	// }]);
	// Route::get('blade/main_content',['as'=>'blade_main_content',function(){
	// 	return "blade_main_content";		
	// }]);

	//home, about
	Route::get('home',['as'=>'home',function(){
		return view('layouts/home');
	}]);
	Route::get('about',['as'=>'about',function(){
		return view('layouts/about');
	}]);

});


Route::group(['as' => 'dashboard::'], function () {
	Route::get('dashboard', ['as' => 'dashboard', function () {
		return view('admin/dashboard');
	}]);

	//post management
	/*
	Route::get('post', ['as' => 'posts', function () {
		$data['posts']=array(
			array('slug'=>'gallery','desc'=>'gallery description'),
			array('slug'=>'inspiration','desc'=>'inspiration description'),
			array('slug'=>'art','desc'=>'art description'),
			);
		return view('admin/post/index',$data);
	}]);
	Route::get('post/{slug}', ['as' => 'post', function ($slug) {
		$data['post']=array('slug'=>'art','desc'=>'art description');
		return view('admin/post/view',$data);
	}]);
	Route::get('post/{slug}/edit', ['as' => 'post_edit', function ($slug) {
		$data['post']=array('slug'=>'art','desc'=>'art description');
		return view('admin/post/edit',$data);
	}]);
	Route::get('post/{slug}/delete', ['as' => 'post_delete', function ($slug) {
		$data['post']=array('slug'=>'art','desc'=>'art description');
		return view('admin/post/delete',$data);
	}]);
	Route::get('post/add', ['as' => 'post_add', function ($slug) {
		$data['post']=array('slug'=>'art','desc'=>'art description');
		return view('admin/post/add',$data);
	}]);
	*/

	// Route::get('users/banned', ['as' => 'admin.access.users.banned', 'uses' => 'UserController@banned']);
	
	Route::get('post', ['as' => 'posts', 'uses'=>'PostController@index']);
	Route::get('post/add', ['as' => 'post_create', 'uses'=>'PostController@create']);
	Route::post('post/add', ['as' => 'post_store', 'uses'=>'PostController@store']);
	Route::get('post/{slug}', ['as' => 'post', 'uses'=>'PostController@show']);
	Route::get('post/{slug}/edit', ['as' => 'post_edit', 'uses'=>'PostController@edit']);
	Route::post('post/{slug}/edit', ['as' => 'post_update', 'uses'=>'PostController@update']);
	Route::get('post/{slug}/delete', ['as' => 'post_destroy', 'uses'=>'PostController@destroy']);
	
});


