<?php

use App\Http\Controllers\InnovationProjectController;
use App\Http\Controllers\InnovProjectHandlerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Adim section 
|--------------------------------------------------------------------------
|
*/
// NATIONAL PROJECTS ROUTES
Route::get('/national-innovation-projects',[InnovProjectHandlerController::class,'indexProject'])->name('innovationProject');
Route::get('/national-innovation-startups',[InnovProjectHandlerController::class,'indexStartup'])->name('innovationStartup');

Route::get('/national-innovation-project-create',[InnovProjectHandlerController::class,'projectCreatorForm'])->name('ProjectRegisterForm');
Route::get('/national-innovation-created/{creatorEmail}',[InnovProjectHandlerController::class,'showCreatedProject'])->name('registerProject');

Route::post('/project-creator-store',[InnovProjectHandlerController::class,'projectCreatorStore'])->name('projectCreator.store');
Route::post('/project-store',[InnovProjectHandlerController::class,'projectStore'])->name('project.store');
Route::post('/project-supervisor-store',[InnovProjectHandlerController::class,'projectSupervisorStore'])->name('projectSupervisor.store');

//Auth route of project
Route::get('/dashboard/projects',[InnovationProjectController::class,'index'])->name('backend.projects.index');
Route::get('/dashboard/projects/creators',[InnovationProjectController::class,'creatorsList'])->name('backend.projects.creators');
Route::get('/dashboard/projects/supervisors',[InnovationProjectController::class,'supervisorsList'])->name('backend.projects.supervisors');

Route::get('/get/districts/{regionId}',[InnovProjectHandlerController::class,'districtRequest']);

Route::get('/registrations/Entities/get/districts/{regionId}',[InnovProjectHandlerController::class,'entitiesDistrictRequest']);

// END PROJECTS
// NATIONAL ENTITIES AND PROJECTS ROUTES
Route::get('/registered-national-startups',[InnovProjectHandlerController::class,'nationalEntities'])->name('RegisteredEntities');
Route::get('/registered-national-innovationa-projects',[InnovProjectHandlerController::class,'InnovationProjects'])->name('innovationProjects');
// END PROJECTS

/*
|--------------------------------------------------------------------------
| End
|--------------------------------------------------------------------------
|
*/

/*
|--------------------------------------------------------------------------
| WaveSleek section 
|--------------------------------------------------------------------------
|
*/

// Route::get('debug', function () {
//     dd(\App\Models\General::first());
// });
// Route::get('install-migrate', function() {
//     Artisan::queue('migrate');
// });

// Route::get('config-clear', function() {
//     Artisan::queue('config:clear');
// });

// Route::get('dump-autoload', function() {
//     Artisan::queue('dump-autoload');
// });

// Route::get('install-seed', function () {
//     Artisan::call('db:seed', [
//         '--class' => \Database\Seeders\DatabaseSeeder::class
//     ]);
// });

Auth::routes();

Route::get('logout', function () {
    Auth::logout();
    Session::flush();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('frontend.home');
});

Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.','middleware' => ['web']], function () {
    Route::get('/', 'FrontendController@index')->name('home');
//    Route::get('about', 'FrontendController@about')->name('about');
    Route::get('news', 'FrontendController@news')->name('news');
    Route::get('news/{slug}', 'FrontendController@singleNews')->name('news.single');
    Route::get('events', 'FrontendController@events')->name('events');
    Route::get('events/{slug}', 'FrontendController@singleEvent')->name('events.single');
    Route::get('awards', 'FrontendController@awards')->name('awards');

    // STARTUP REGISTRATION
//  ----------------------------------------ADMIN


    Route::get('registrations', 'FrontendController@registrations')->name('registrations');
        Route::get('registrations/register', 'FrontendController@register')->name('registration.register');
    Route::post('registrations/register/store', 'FrontendController@registrationStore')->name('registration.register.store');
    Route::get('registrations/additional-field', 'FrontendController@additionalField')->name('registration.additional_field');


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


Route::group(['namespace' => 'App\Http\Controllers\Backend', 'prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth']], function () {
    Route::get('file-manager/tinymce5', function () {
       return view('vendor.file-manager.tinymce5');
    });
// ENTIES / START UP REGISTERED
Route::get('registered-entities', 'EntityRegisteringController@index')->name('entities.index');
Route::get('registered-entity/show/{id}', 'EntityRegisteringController@show')->name('entities.show');


    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('banners','BannerController');
    Route::resource('leaders','LeaderController');
    Route::resource('sections','SectionController');
    Route::resource('posts','PostController');
    Route::resource('events','EventController');
    Route::resource('registration','RegistrationController');
    Route::resource('awards','AwardController');
    Route::resource('investments','InvestmentController');
    Route::resource('pages','PageController');
    Route::resource('socials','SocialController');
    Route::resource('links','LinkController');

    Route::post('award/categories/store', 'AwardCategoryController@store')->name('award.category.store');
    Route::put('award/categories/{id}/update', 'AwardCategoryController@update')->name('award.category.update');
    Route::delete('award/categories/{id}/destroy', 'AwardCategoryController@destroy')->name('award.category.destroy');

    Route::get('award/{uid}/applications', 'AwardController@applications')->name('award.applications');
    Route::get('award/{uid}/application', 'AwardController@showApplication')->name('award.application.show');
    Route::delete('award/application/{uid}/destroy', 'AwardController@destroyApplication')->name('award.application.destroy');

    Route::get('general', 'GeneralController@index')->name('general.index');
    Route::post('general/store', 'GeneralController@store')->name('general.store');

});

/*
|--------------------------------------------------------------------------
|End section 
|--------------------------------------------------------------------------
|
*/