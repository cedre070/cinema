<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@welcome')->name('welcome');

/*
* Création de Route en Get
* /about ma route interne :URI
* return view: retourne la vue
*/
Route::get('/about', function () {
    return view('pages/about');
});

/*
* Page contact
*/


Route::get('/contact', function () {
    return view('pages/contact');
});
/*
* Page FAQ
*/


Route::get('/faq', function () {
    return view('pages/faq');
});
/*
* Page Mention Legale
*/


Route::get('/mention', function () {
    return view('pages/mention');
});
/*
* Page Menu
*/


Route::get('/menu', function () {
    return view('pages/menu');
});

Route::group(['prefix'=>'movie'],function(){
//URIS derriere le groupe de Route
// qui appel le bon controlleur et la methode de controlleur
// NomduControlleeur@methodedecontroleur

  Route::get('/index','MovieController@index')->name('movie.index');
  Route::any('/create','MovieController@create')->name('movie.create');
  Route::get('/update','MovieController@update')->name('movie.update');
  Route::get('/remove/{id}','MovieController@remove')->name('movie.remove');
  Route::get('/view/{id}','MovieController@view')->name('movie.view');


});

Route::group(['prefix'=>'actor'],function(){
//URIS derriere le groupe de Route
// qui appel le bon controlleur et la methode de controlleur
// NomduControlleeur@methodedecontroleur

  Route::get('/index','ActorController@index')->name('index');
  Route::get('/create','ActorController@create')->name('create');
  Route::get('/update','ActorController@update')->name('update');
  Route::get('/remove/{id}','ActorController@remove')->name('actors.remove');


});
Route::group(['prefix'=>'directors'],function(){
//URIS derriere le groupe de Route
// qui appel le bon controlleur et la methode de controlleur
// NomduControlleeur@methodedecontroleur

  Route::get('/index','DirectorsController@index')->name('index');
  Route::get('/create','DirectorsController@create')->name('create');
  Route::get('/update','DirectorsController@update')->name('update');
  Route::get('/remove/{id}','DirectorsController@remove')->name('directors.remove');


});
Route::group(['prefix'=>'categories'],function(){
//URIS derriere le groupe de Route
// qui appel le bon controlleur et la methode de controlleur
// NomduControlleeur@methodedecontroleur

  Route::get('/index','CategoriesController@index')->name('index');
  Route::get('/create','CategoriesController@create')->name('create');
  Route::get('/update','CategoriesController@update')->name('update');
  Route::get('/remove/{id}','CategoriesController@remove')->name('categories.remove');


});
