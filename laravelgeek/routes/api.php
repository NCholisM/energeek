<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SkillSetController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('jobs', JobController::class);
// Route::resource('candidates', CandidateController::class);
// Route::resource('skills', SkillController::class);
// Route::resource('skillsets', SkillSetController::class);

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/skills', [SkillController::class, 'index']);
Route::get('/candidates', [CandidateController::class, 'index']);
Route::get('/skillsets', [SkillSetController::class, 'index']);
