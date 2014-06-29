<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/shop', function()
{
	return View::make('shop');
});

Route::get('/kreate', function()
{
	return View::make('submit');
});

Route::get('/blog', function()
{
	return View::make('blog');
});

Route::get('/dashboard', function()
{
	return View::make('dashboard');
});

Route::get('/rekening', function()
{
	return View::make('rekening');
});

Route::get('/upload', function()
{
	return View::make('upload');
});

Route::get('/product', function()
{
	return View::make('product');
});

Route::get('kreatees/{id}', function($id)
{
    return "Cat #$id";
})->where('id', '[0-9]+');


Route::get('kreatees', function(){
	return "All cats";
});

Route::get('about', function(){
	return View::make('about')->with('number_of_cats', 9000);
});

Route::get('users', function(){

	$users = User::all();
	return View::make('users')->with('users', $users);
});

Route::get('cats', function(){
	/* return all queries in cats table */
	$cats = Cat::all();
	return View::make('cats.index')
		->with('cats', $cats);
});

Route::get('cats/breeds/{name}', function($name){
	/* wherename merupakan sql query dimana WHERE name = $name */
	$breed = Breed::whereName($name)->with('cats')->first();
	/* membuat halaman cats dengan model yang sesuai */
	return View::make('cats.index')
		->with('breed', $breed)
		->with('cats', $breed->cats);
});