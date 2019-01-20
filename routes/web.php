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
Route::get('/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/{slug?}', 'BlogController@article')->name('article');
Route::get('/catalog/{slug?}', 'CatalogController@product')->name('product');
Route::get('/price/{slug?}', 'CatalogController@catalog')->name('catalog');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
    Route::resource('/catalog', 'CatalogController', ['as'=>'admin']);
 });

Route::post('/image/upload', 'ImageController@upload')->name('image.upload');

Route::get('/', function () {
    return view('blog.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
