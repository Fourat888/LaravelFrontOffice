<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('front.homepage');
});

Route::get('/dashboard', [
    'uses' => 'DashboardController@index',
    'as' => 'dashboard.index'
])->middleware('auth');

Route::get('/dashboard/go-live', [
    'uses' => 'DashboardController@go_live',
    'as' => 'dashboard.go_live'
])->middleware('auth');

Route::get('/dashboard/go-down', [
    'uses' => 'DashboardController@go_down',
    'as' => 'dashboard.go_down'
])->middleware('auth');

Route::get('/homepage', [
    'uses' => 'FrontController@homepage',
    'as' => 'front.homepage'
]);

Route::get('/about-me', [
    'uses' => 'FrontController@about',
    'as' => 'front.about'
]);

Route::get('/contact-me', [
    'uses' => 'FrontController@contact',
    'as' => 'front.contact'
]);

Route::get('/blog', [
    'uses' => 'FrontController@blog',
    'as' => 'front.blog'
]);

Route::get('/category/{id}', [
    'uses' => 'FrontController@category',
    'as' => 'front.category'
]);

Route::get('/search', [
    'uses' => 'FrontController@search',
    'as' => 'front.search'
]);

Route::get('/subscribed', function () {
    return view('subscribed');
});

Route::post('/subscribe', [
    'uses' => 'FrontController@subscribe',
    'as' => 'front.subscribe'
]);

Route::get('/contact', [
    'uses' => 'ContactController@index',
    'as' => 'contact.index'
])->middleware('auth');

Route::post('/contact/save', [
    'uses' => 'ContactController@save',
    'as' => 'contact.save'
])->middleware('auth');

Route::get('/about', [
    'uses' => 'AboutController@index',
    'as' => 'about.index'
])->middleware('auth');

Route::post('/about/save', [
    'uses' => 'AboutController@save',
    'as' => 'about.save'
])->middleware('auth');

Route::get('/settings', [
    'uses' => 'SettingsController@index',
    'as' => 'settings.index'
])->middleware('auth');

Route::post('/settings/save', [
    'uses' => 'SettingsController@save',
    'as' => 'settings.save'
])->middleware('auth');

Route::get('/subscribers', [
    'uses' => 'SubscriberController@index',
    'as' => 'subscribers.index'
])->middleware('auth');

Route::get('/subscribers/export', [
    'uses' => 'SubscriberController@export',
    'as' => 'subscribers.export'
])->middleware('auth');

Route::get('/subscribers/destroy/{id}', [
    'uses' => 'SubscriberController@destroy',
    'as' => 'subscribers.destroy'
])->middleware('auth');

Route::get('/categories', [
    'uses' => 'CategoryController@index',
    'as' => 'categories.index'
])->middleware('auth');

Route::get('/categories/create', [
    'uses' => 'CategoryController@create',
    'as' => 'categories.create'
])->middleware('auth');

Route::get('/categories/edit/{id}', [
    'uses' => 'CategoryController@edit',
    'as' => 'categories.edit'
])->middleware('auth');

Route::get('/categories/destroy/{id}', [
    'uses' => 'CategoryController@destroy',
    'as' => 'categories.destroy'
])->middleware('auth');

Route::post('/categories/save', [
    'uses' => 'CategoryController@store',
    'as' => 'categories.store'
])->middleware('auth');

Route::get('/posts', [
    'uses' => 'PostController@index',
    'as' => 'posts.index'
])->middleware('auth');

Route::get('/posts/create', [
    'uses' => 'PostController@create',
    'as' => 'posts.create'
])->middleware('auth');

Route::get('/posts/edit/{id}', [
    'uses' => 'PostController@edit',
    'as' => 'posts.edit'
])->middleware('auth');

Route::get('/posts/destroy/{id}', [
    'uses' => 'PostController@destroy',
    'as' => 'posts.destroy'
])->middleware('auth');

Route::post('/posts/save', [
    'uses' => 'PostController@store',
    'as' => 'posts.store'
])->middleware('auth');

Route::get('/post/{id}', [
    'uses' => 'FrontController@post',
    'as' => 'posts.post'
])->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
