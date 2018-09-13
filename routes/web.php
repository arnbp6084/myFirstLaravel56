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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//For Auth login
Auth::routes();

//For CRUD operation
Route::resource('tasks', 'TaskController');

//demo
Route::get('/demo', function () {
return view('demo');
});

//events
Route::get('item-created', function(){

    \App\Item::create(['name'=>'test 2', 'price'=>100]);

    dd('Item created successfully.');

});



Route::get('item-updated', function(){

    \App\Item::find(1)->update(['name'=>'test 3', 'price'=>100]);

    dd('Item updated successfully.');

});



Route::get('item-deleted', function(){

    \App\Item::find(1)->delete();

    dd('Item deleted successfully.');

});

//repository
Route::get('/getusers', 'UserController@index')->name('getusers');
Route::get('/getuserbyid/{id}', 'UserController@show')->name('getuserbyid');
Route::get('/deluser{id}', 'UserController@delete')->name('deluser');

//group route
 Route::group([], function () {
	 Route::get('/first', function () {
	    echo "I'm First";
	 });
	 Route::get('/second', function () {
	    echo "I'm Second";
	 });
	 Route::get('/third', function () {
	    echo "I'm Third";
	 });
 });

 // using prefix in group
 Route::group(['prefix' => 'books'], function () {
	// First Route
	Route::get('/first', function () {
	return 'The Colour of Magic';
	 });
	// Second Route
	Route::get('/second', function () {
	return 'Reaper Man';
	 });

	// Third Route
	Route::get('/third', function () {
	 return 'Lords and Ladies';
	 });

});

//using subdomain in group
Route::group(['domain' => 'fakebook.dev'], function()
    {
    Route::any('/', function()
    {
        return 'My own domain';
    }); 
}); 

Route::group(['domain' => '{username}.fakebook.dev'], function()
{
    Route::any('/', function($username)
    {
        return 'You visit your account: '. $username; 
    });
});