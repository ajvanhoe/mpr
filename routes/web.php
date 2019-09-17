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


/*** PUBLIC AREA ***/

Route::get('/', 'FrontController@frontpage')->name('frontpage');
Route::get('/kontakt', 'FrontController@contact')->name('contact');

Route::get('/prodavnica/{type}/', 'FrontController@index')->name('index');
Route::get('/prodavnica/{type}/prikaz/{id}', 'FrontController@show')->name('public.show');


Route::name('search.')->group(function () {
	Route::post('/search/{type}', 'SearchController@search')->name('string');	
	Route::get('/search/category/{type}/{category}/{subcategory?}', 'SearchController@searchByCategory')->name('category');
});



/*** AUTH AREA ***/

Auth::routes();

Route::group(['middleware'=>'auth'], function(){

	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
	Route::get('/dashboard/categories/', 'HomeController@categories')->name('categories');

	/** CRUD **/

	Route::name('show.')->group(function () {
		Route::get('/dashboard/books/{id?}', 'HomeController@book')->name('book');
		Route::get('/dashboard/comics/{id?}', 'HomeController@comic')->name('comic');
		Route::get('/dashboard/albums/{id?}', 'HomeController@album')->name('album');
		Route::get('/dashboard/items/{id?}', 'HomeController@item')->name('item');
	});

	Route::name('create.')->group(function () {
		Route::get('/dashboard/create/book/{id?}', 'HomeController@add_book')->name('book');
		Route::get('/dashboard/create/comic/{id?}', 'HomeController@add_comic')->name('comic');
		Route::get('/dashboard/create/album/{id?}', 'HomeController@add_album')->name('album');
		Route::get('/dashboard/create/item/{id?}', 'HomeController@add_item')->name('item');
	});

	Route::name('store.')->group(function () {
		Route::post('/dashboard/create/book/{id}', 'Dashboard\BookController@store')->name('book');
		Route::post('/dashboard/create/comic/{id}', 'Dashboard\ComicController@store')->name('comic');
		Route::post('/dashboard/create/album/{id}', 'Dashboard\AlbumController@store')->name('album');
		Route::post('/dashboard/create/item/{id}', 'Dashboard\ItemController@store')->name('item');
	});

	// cancel entry
	Route::get('/dashboard/cancel', 'HomeController@cancel')->name('cancel');
	 


	/* Media */
	Route::name('store.media.')->group(function () {
		Route::post('/dashboard/media/book/{id}', 'Dashboard\BookController@store_media')->name('book');
		Route::post('/dashboard/media/comic/{id}', 'Dashboard\ComicController@store_media')->name('comic');
		Route::post('/dashboard/media/album/{id}', 'Dashboard\AlbumController@store_media')->name('album');
		Route::post('/dashboard/media/item/{id}', 'Dashboard\ItemController@store_media')->name('item');
	});

	// Route::name('remove.media.')->group(function () {
	// 	Route::post('/dashboard/media/book/{id}/remove', 'Dashboard\BookController@store_media')->name('book');
	// 	Route::post('/dashboard/media/comic/{id}/remove', 'Dashboard\ComicController@store_media')->name('comic');
	// 	Route::post('/dashboard/media/album/{id}/remove', 'Dashboard\AlbumController@store_media')->name('album');
	// 	Route::post('/dashboard/media/item/{id}/remove', 'Dashboard\ItemController@store_media')->name('item');
	// });

	/* *** */

	// Route::name('edit.')->group(function () {
	// 	Route::get('/dashboard/books/{id}/edit', 'Dashboard\BookController@edit')->name('book');
	// 	Route::get('/dashboard/comics/{id}/edit', 'Dashboard\ComicController@edit')->name('comic');
	// 	Route::get('/dashboard/albums/{id}/edit', 'Dashboard\AlbumController@edit')->name('album');
	// 	Route::get('/dashboard/items/{id}/edit', 'Dashboard\ItemController@edit')->name('item');
	// });
	
	Route::get('/dashboard/{type}/edit/{id}', 'HomeController@edit')->name('edit');
	Route::post('/dashboard/{type}/edit/{id}', 'HomeController@update')->name('update');
	Route::post('/dashboard/media/{type}/remove/{id}', 'HomeController@remove_media')->name('remedia');

	// Route::name('update.')->group(function () {
	// 	Route::post('/dashboard/books/{id}/edit', 'Dashboard\BookController@update')->name('book');
	// 	Route::post('/dashboard/comics/{id}/edit', 'Dashboard\ComicController@update')->name('comic');
	// 	Route::post('/dashboard/albums/{id}/edit', 'Dashboard\AlbumController@update')->name('album');
	// 	Route::post('/dashboard/items/{id}/edit', 'Dashboard\ItemController@update')->name('item');
	// });
	
	Route::name('remove.')->group(function () {
		Route::post('/dashboard/books/{id}/remove', 'Dashboard\BookController@destroy')->name('book');
		Route::post('/dashboard/comics/{id}/remove', 'Dashboard\ComicController@destroy')->name('comic');
		Route::post('/dashboard/albums/{id}/remove', 'Dashboard\AlbumController@destroy')->name('album');
		Route::post('/dashboard/items/{id}/remove', 'Dashboard\ItemController@destroy')->name('item');
	});

	/** CATEGORIES CRUD **/ 

	Route::name('show.category.')->group(function () {
	 Route::get('/dashboard/categories/books', 'HomeController@book_categories')->name('book');
	 Route::get('/dashboard/categories/comics', 'HomeController@comic_categories')->name('comic');
	 Route::get('/dashboard/categories/albums', 'HomeController@album_categories')->name('album');
	 Route::get('/dashboard/categories/items', 'HomeController@item_categories')->name('item');
	});

	Route::name('create.category.')->group(function () {
	 Route::post('/dashboard/categories/books', 'Dashboard\BookCategoryController@store')->name('book');
	 Route::post('/dashboard/categories/comics', 'Dashboard\ComicCategoryController@store')->name('comic');
	 Route::post('/dashboard/categories/albums', 'Dashboard\AlbumCategoryController@store')->name('album');
	 Route::post('/dashboard/categories/items', 'Dashboard\CategoryController@store')->name('item');
	});


	// other way 
	// Route::name('create.category.')->group(function () {
	//  Route::post('/dashboard/categories/{type}/create', 'Dashboard\CategoryController@store')->name('general');
	// });


	Route::name('remove.category.')->group(function () {
	 Route::post('/dashboard/categories/books/{id}/remove', 'Dashboard\BookCategoryController@destroy')->name('book');	
	 Route::post('/dashboard/categories/comics/{id}/remove', 'Dashboard\ComicCategoryController@destroy')->name('comic');	
	 Route::post('/dashboard/categories/albums/{id}/remove', 'Dashboard\AlbumCategoryController@destroy')->name('album');	
	 Route::post('/dashboard/categories/items/{id}/remove', 'Dashboard\CategoryController@destroy')->name('item');	
	});

	Route::name('create.subcategory.')->group(function () {
		Route::post('/dashboard/subcategories/books', 'Dashboard\BookCategoryController@store_subcat')->name('book');
		Route::post('/dashboard/subcategories/comics', 'Dashboard\ComicCategoryController@store_subcat')->name('comic');
		Route::post('/dashboard/subcategories/albums', 'Dashboard\AlbumCategoryController@store_subcat')->name('album');
		Route::post('/dashboard/subcategories/items', 'Dashboard\CategoryController@store_subcat')->name('item');
	 
	});

	Route::name('remove.subcategory.')->group(function () {
	 	Route::post('/dashboard/subcategories/books/{id}/remove', 'Dashboard\BookCategoryController@destroy_subcat')->name('book');
	 	Route::post('/dashboard/subcategories/comics/{id}/remove', 'Dashboard\ComicCategoryController@destroy_subcat')->name('comic');
		Route::post('/dashboard/subcategories/albums/{id}/remove', 'Dashboard\AlbumCategoryController@destroy_subcat')->name('album');
		Route::post('/dashboard/subcategories/items/{id}/remove', 'Dashboard\CategoryController@destroy_subcat')->name('item');

	});
	




});