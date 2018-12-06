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
})->name('welcome');


Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');




/* Albumi - generalno */

// index
Route::get('/albumi', 'AlbumController@index')->name('public.index.albuma');
// album show
Route::get('/album/{id}', 'AlbumController@show')->name('public.show.album');

/* Knjige - generalno */

// index
Route::get('/knjige', 'BookController@index')->name('public.index.knjiga');
// show
Route::get('/knjiga/{id}', 'BookController@show')->name('public.show.knjiga');


/* Stripovi - generalno */

// index
Route::get('/stripovi', 'ComicController@index')->name('public.index.stripova');
// show
Route::get('/strip/{id}', 'ComicController@show')->name('public.show.strip');


/* Search */
Route::post('/pretraga', 'SearchController@search')->name('public.search');




Auth::routes();



/***** ADMIN PANEL *****/


Route::group(['middleware'=>'auth'], function(){

Route::get('/home', 'HomeController@index')->name('dashboard');
//Route::get('/settings', 'HomeController@settings')->name('settings');
Route::get('/dashboard/categories', 'HomeController@categories')->name('categories');

/* Albumi */

// admin albumi
Route::get('/dashboard/albumi', 'HomeController@albumi')->name('admin.index.albuma');
//Route::get('/dashboard/albumi/index', 'HomeController@albumi')->name('admin.index.albuma');
// show
Route::get('/dashboard/albumi/{id}/show', 'Dashboard\AlbumController@show')->name('show.album');
// albumi edit
Route::get('/dashboard/albumi/{id}/edit', 'Dashboard\AlbumController@edit')->name('edit.album');
Route::post('/dashboard/albumi/{id}/edit', 'Dashboard\AlbumController@update')->name('update.album');
// album delete
Route::post('/dashboard/albumi/{id}/delete', 'Dashboard\AlbumController@destroy')->name('delete.album');

// albumi create&store
Route::get('/dashboard/albumi/create', 'Dashboard\AlbumController@create')->name('create.album');
Route::post('/dashboard/albumi/create', 'Dashboard\AlbumController@store')->name('store.album');
// upload slika & resto
Route::get('/dashboard/albumi/{id}/media', 'Dashboard\AlbumMediaController@create')->name('album.media');
Route::post('/dashboard/albumi/{id}/media', 'Dashboard\AlbumMediaController@store')->name('store.album.media');
// brisanje pojedinacne slike
Route::get('/dashboard/albumi/media/{id}/delete', 'Dashboard\AlbumMediaController@destroy')->name('delete.album.media');

/* Kategorije Albuma */

Route::get('/dashboard/albumi/categories/index', 'Dashboard\AlbumCategoryController@index')->name('albumi.index.kategorija');
Route::post('/dashboard/albumi/categories/index', 'Dashboard\AlbumCategoryController@store')->name('store.album.category');
Route::post('/dashboard/albumi/categories/{id}/edit', 'Dashboard\AlbumCategoryController@update')->name('edit.album.category');
Route::post('/dashboard/albumi/categories/{id}/delete', 'Dashboard\AlbumCategoryController@destroy')->name('delete.album.category');

/* Podkategorije Albuma */
Route::get('/dashboard/albumi/categories/{category}/subcategories', 'Dashboard\AlbumSubcategoryController@index')->name('index.album.subcategory');
Route::post('/dashboard/albumi/categories/{category}/subcategories', 'Dashboard\AlbumSubcategoryController@store')->name('store.album.subcategory');
Route::get('/dashboard/albumi/categories/remove-subcategory/{id}', 'Dashboard\AlbumSubcategoryController@destroy')->name('delete.album.subcategory');



/* KNJIGE */ 



// admin knjige
Route::get('/dashboard/knjige', 'HomeController@knjige')->name('admin.index.knjiga');

// show
Route::get('/dashboard/knjiga/{id}', 'Dashboard\BookController@show')->name('show.knjiga');
// edit
Route::get('/dashboard/knjige/{id}/edit', 'Dashboard\BookController@edit')->name('edit.knjiga');
Route::post('/dashboard/knjige/{id}/edit', 'Dashboard\BookController@update')->name('update.knjiga');
// delete
Route::post('/dashboard/knjige/{id}/delete', 'Dashboard\BookController@destroy')->name('delete.knjiga');

//  create&store
Route::get('/dashboard/knjige/create', 'Dashboard\BookController@create')->name('create.knjiga');
Route::post('/dashboard/knjige/create', 'Dashboard\BookController@store')->name('store.knjiga');
// upload slika & resto
Route::get('/dashboard/knjige/{id}/media', 'Dashboard\BookMediaController@create')->name('knjiga.media');
Route::post('/dashboard/knjige/{id}/media', 'Dashboard\BookMediaController@store')->name('store.knjiga.media');
// brisanje pojedinacne slike
Route::get('/dashboard/knjige/media/{id}/delete', 'Dashboard\BookMediaController@destroy')->name('delete.knjiga.media');

/* Kategorije knjiga */

Route::get('/dashboard/knjige/categories/index', 'Dashboard\BookCategoryController@index')->name('knjige.index.kategorija');
Route::post('/dashboard/knjige/categories/index', 'Dashboard\BookCategoryController@store')->name('store.knjiga.category');
Route::post('/dashboard/knjige/categories/{id}/edit', 'Dashboard\BookCategoryController@update')->name('edit.knjiga.category');
Route::post('/dashboard/knjige/categories/{id}/delete', 'Dashboard\BookCategoryController@destroy')->name('delete.knjiga.category');

/* Podkategorije knjiga */
Route::get('/dashboard/knjige/categories/{category}/subcategories', 'Dashboard\BookSubcategoryController@index')->name('index.knjiga.subcategory');
Route::post('/dashboard/knjige/categories/{category}/subcategories', 'Dashboard\BookSubcategoryController@store')->name('store.knjiga.subcategory');
Route::get('/dashboard/knjige/categories/remove-subcategory/{id}', 'Dashboard\BookSubcategoryController@destroy')->name('delete.knjiga.subcategory');

/* STRIPOVI */

// admin stripovi
Route::get('/dashboard/stripovi', 'HomeController@stripovi')->name('admin.index.stripova');

// show
Route::get('/dashboard/strip/{id}', 'Dashboard\ComicController@show')->name('show.strip');
// stripovi edit
Route::get('/dashboard/stripovi/{id}/edit', 'Dashboard\ComicController@edit')->name('edit.strip');
Route::post('/dashboard/stripovi/{id}/edit', 'Dashboard\ComicController@update')->name('update.strip');
// stripovidelete
Route::post('/dashboard/stripovi/{id}/delete', 'Dashboard\ComicController@destroy')->name('delete.strip');

// stripovi create&store
Route::get('/dashboard/stripovi/create', 'Dashboard\ComicController@create')->name('create.strip');
Route::post('/dashboard/stripovi/create', 'Dashboard\ComicController@store')->name('store.strip');
// upload slika & resto
Route::get('/dashboard/stripovi/{id}/media', 'Dashboard\ComicMediaController@create')->name('strip.media');
Route::post('/dashboard/stripovi/{id}/media', 'Dashboard\ComicMediaController@store')->name('store.strip.media');
// brisanje pojedinacne slike
Route::get('/dashboard/stripovi/media/{id}/delete', 'Dashboard\ComicMediaController@destroy')->name('delete.strip.media');

/* Kategorije stripova */
Route::get('/dashboard/stripovi/categories/index', 'Dashboard\ComicCategoryController@index')->name('stripovi.index.kategorija');
Route::post('/dashboard/stripovi/categories/index', 'Dashboard\ComicCategoryController@store')->name('store.strip.category');
Route::post('/dashboard/stripovi/categories/{id}/edit', 'Dashboard\ComicCategoryController@update')->name('edit.strip.category');
Route::post('/dashboard/stripovi/categories/{id}/delete', 'Dashboard\ComicCategoryController@destroy')->name('delete.strip.category');

/* Podkategorije stipova */
Route::get('/dashboard/stripovi/categories/{category}/subcategories', 'Dashboard\ComicSubcategoryController@index')->name('index.strip.subcategory');
Route::post('/dashboard/stripovi/categories/{category}/subcategories', 'Dashboard\ComicSubcategoryController@store')->name('store.strip.subcategory');
Route::get('/dashboard/stripovi/categories/remove-subcategory/{id}', 'Dashboard\ComicSubcategoryController@destroy')->name('delete.strip.subcategory');


/* DODATNI LINKOVI */

// Radi - dodatni link za svaki slucaj!
Route::get('/dashboard/categories/{category}', function ($category) {
 	return redirect('/dashboard/'.$category.'/categories/index');
 });



});			// Route::group middleware => 'auth'

