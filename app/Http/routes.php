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
	return "about page";
});

Route::get('category/{id}',function($id){
	return "get post of category $id";
});

// Route::get('post/images/{title?}',function($title=null){
// 	return "get image/images of post $title";
// });
Route::get('post/images/{title?}',function($title='cover_pic'){
	return "get image/images of post $title";
});

Route::get('contact',function(){
	return view('contact');
});


//regular expression
Route::get('article/{id}',function($id){
	return "article id: $id number [0-9]+'";
})->where('id','[0-9]+');

Route::get('article/{slug}',function($slug){
	return "article slug: $slug alphabet [A-Za-z]+";
})->where('slug','[A-Za-z]+');


//Global Constraints
// Route::get('article/{id}',function($id){
// 	return "article id: $id number [0-9]+'";
// })->where('id','[0-9]+');

// Route::get('article/{slug}',function($slug){
// 	return "article slug: $slug alphabet [A-Za-z]+";
// })->where('slug','[A-Za-z]+');

//named route
Route::get('category/post/date/images/top3',['as'=>'top3',function(){
	return "top 3 images for any date of post under category";
}]);

//group route
Route::group(['as' => 'admin::'], function () {
	Route::get('dashboard', ['as' => 'dashboard', function () {
        // Route named "admin::dashboard"
	}]);
});


Route::group(['as'=>'donee::'],function(){
	Route::get('dashboard',['as'=>'dashboard',function(){
		return "inside dashboard of donee";
	}]);
	// Route::get('campaign',['as'=>'campaign',function(){
	// 	return "inside dashboard of donee for campaign";
	// }]);
	
});