<?php

use App\Http\Controllers\InnovationProjectController;
use App\Http\Controllers\ProjectOwnerController;
use App\Http\Controllers\ProjectSupervisorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/get-projects',[InnovationProjectController::class , 'showProjects']);
Route::post('/create-project',[InnovationProjectController::class , 'createProject']);


Route::get('/get-project-owner',[ProjectOwnerController::class , 'index']);
Route::post('/register-project-owner',[ProjectOwnerController::class , 'createOwner']);

Route::get('/get-project-supervisor',[ProjectSupervisorController::class , 'index']);
Route::post('/register-project-supervisor',[ProjectSupervisorController::class , 'createSupervisor']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
