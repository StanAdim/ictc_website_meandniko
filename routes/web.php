<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.','middleware' => ['web']], function () {
    Route::get('/', 'FrontendController@index')->name('home');
    Route::get('about', 'FrontendController@about')->name('about');
    Route::get('news', 'FrontendController@news')->name('news');
    Route::get('news/{slug}', 'FrontendController@singleNews')->name('news.single');
    Route::get('events', 'FrontendController@events')->name('events');
    Route::get('events/{slug}', 'FrontendController@singleEvent')->name('events.single');
    Route::get('awards', 'FrontendController@awards')->name('events');
    Route::get('awards/{slug}', 'FrontendController@singleAward')->name('events.single');
    Route::get('investments', 'FrontendController@investments')->name('investments');
    Route::get('investments/{slug}', 'FrontendController@singleInvestment')->name('investments.single');

    Route::get('contact', 'FrontendController@contact')->name('contact');
});


Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('frontend.home');

});
Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Backend', 'prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth']], function () {
    Route::get('file-manager/tinymce5', function () {
       return view('vendor.file-manager.tinymce5');
    });

    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('banners','BannerController');
    Route::resource('leaders','LeaderController');
    Route::resource('sections','SectionController');
    Route::resource('posts','PostController');
    Route::resource('events','EventController');
    Route::resource('awards','AwardController');
    Route::resource('investments','InvestmentController');
    Route::resource('pages','PageController');
});