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

Route::get('debug', function () {
    dd(\App\Models\General::first());
});
Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.','middleware' => ['web']], function () {
    Route::get('/', 'FrontendController@index')->name('home');
//    Route::get('about', 'FrontendController@about')->name('about');
    Route::get('news', 'FrontendController@news')->name('news');
    Route::get('news/{slug}', 'FrontendController@singleNews')->name('news.single');
    Route::get('events', 'FrontendController@events')->name('events');
    Route::get('events/{slug}', 'FrontendController@singleEvent')->name('events.single');
    Route::get('awards', 'FrontendController@awards')->name('awards');
    Route::get('awards/{slug}', 'FrontendController@singleAward')->name('awards.single');
    Route::get('leader/{id}', 'FrontendController@singleLeader')->name('leaders.single');
    Route::get('awards/{slug}/apply', 'FrontendController@applyAward')->name('award.apply');
    Route::post('awards/application/store', 'FrontendController@awardStore')->name('application.store');
    Route::put('awards/application/{uid}/update', 'FrontendController@awardUpdate')->name('application.update');
    Route::get('award-application/{uid}/show', 'FrontendController@awardApplicationShow')->name('application.show');
    Route::get('investments', 'FrontendController@investments')->name('investments');
    Route::get('investments/{slug}', 'FrontendController@singleInvestment')->name('investments.single');

    Route::get('contact', 'FrontendController@contact')->name('contact');
    Route::post('contact/store', 'FrontendController@contactStore')->name('contact.store');
    Route::get('{slug}', 'FrontendController@viewPage')->name('page');
});


Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('frontend.home');

});

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
    Route::resource('socials','SocialController');
    Route::resource('links','LinkController');

    Route::post('award/categories/store', 'AwardCategoryController@store')->name('award.category.store');
    Route::put('award/categories/{id}/update', 'AwardCategoryController@update')->name('award.category.update');
    Route::delete('award/categories/{id}/destroy', 'AwardCategoryController@destroy')->name('award.category.destroy');

});