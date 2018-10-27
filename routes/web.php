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

/*Route Page*/
Route::get('/', 'PageController@getHome')->name('home');
Route::get('login', 'PageController@getLogin')->name('login');
Route::post('login', 'PageController@postLogin')->name('login');
Route::get('register', 'PageController@getRegister')->name('register');
Route::post('register', 'PageController@postRegister')->name('register');
Route::get('services', 'PageController@getServices')->name('home-services');
Route::get('about-us', 'PageController@getAboutUs')->name('home-about-us');
Route::get('collection', 'PageController@getCollection')->name('home-collection');
Route::get('category/{slug}', 'PageController@getCategory')->name('home-category');
Route::get('post/{slug}', 'PageController@getPost')->name('home-post');
Route::post('contact', 'PageController@postContact')->name('home-contact');
/*Route Admin*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@getAdmin')->name('indexadmin');
    Route::get('logout', 'AdminController@getLogout')->name('logout');
    /* Group for contact */
    Route::get('mail-inbox', 'AdminController@getMailInbox')->name('mail-inbox');
    /* Group for category */
    Route::prefix('category')->group(function () {
        Route::get('/', 'CategoryController@getListCategory')->name('list-category');
        Route::get('updates/{id}', 'CategoryController@getEditCategory')->name('edit-category');
        Route::post('updates/{id}', 'CategoryController@postEditCategory')->name('edit-category');
        Route::get('add', 'CategoryController@getAddCategory')->name('add-category');
        Route::post('add', 'CategoryController@postAddCategory')->name('add-category');
        Route::post('delete/{id}', 'CategoryController@postDeleteCategory')->name('delete-category');
    });
    /* Group for post */
    Route::prefix('post')->group(function () {
        Route::get('/', 'PostController@getListPost')->name('list-post');
        Route::get('updates/{id}', 'PostController@getEditPost')->name('edit-post');
        Route::post('updates/{id}', 'PostController@postEditPost')->name('edit-post');
        Route::get('add', 'PostController@getAddPost')->name('add-post');
        Route::post('add', 'PostController@postAddPost')->name('add-post');
        Route::get('delete/{id}', 'PostController@getDeletePost')->name('delete-post');
    });
    /* Group for product */
    Route::prefix('product')->group(function () {
        Route::get('/', 'ProductController@getListProduct')->name('list-product');
        Route::get('updates/{id}', 'ProductController@getEditProduct')->name('edit-product');
        Route::post('updates/{id}', 'ProductController@postEditProduct')->name('edit-product');
        Route::get('add', 'ProductController@getAddProduct')->name('add-product');
        Route::post('add', 'ProductController@postAddProduct')->name('add-product');
        Route::get('delete/{id}', 'ProductController@getDeleteProduct')->name('delete-product');
    });
    /* Group for collection */
    Route::prefix('collection')->group(function () {
        Route::get('/', 'CollectionController@getListCollection')->name('list-collection');
        Route::get('updates/{id}', 'CollectionController@getEditCollection')->name('edit-collection');
        Route::post('updates/{id}', 'CollectionController@postEditCollection')->name('edit-collection');
        Route::get('add', 'CollectionController@getAddCollection')->name('add-collection');
        Route::post('add', 'CollectionController@postAddCollection')->name('add-collection');
        Route::get('delete/{id}', 'CollectionController@getDeleteCollection')->name('delete-collection');
    });
    /* Group for user */
    Route::prefix('user')->group(function () {
        Route::get('/', 'UserController@getListUser')->name('list-user');
        Route::get('updates/{id}', 'UserController@getEditUser')->name('edit-user');
        Route::post('updates/{id}', 'UserController@postEditUser')->name('edit-user');
        Route::get('add', 'UserController@getAddUser')->name('add-user');
        Route::post('add', 'UserController@postAddUser')->name('add-user');
        Route::get('delete/{id}', 'UserController@getDeleteUser')->name('delete-user');
    });
});
/*Route Error*/
Route::get('/error', function () {
    abort(404);
});