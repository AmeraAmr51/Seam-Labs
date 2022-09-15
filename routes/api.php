<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartOneController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationApiController;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Response;
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

//Part One of Api 
Route::get('/partone/count', [PartOneController::class, 'countNum']);
Route::get('/partone/alphabetic', [PartOneController::class, 'alphabetic']);
Route::get('/partone/minJumps', [PartOneController::class, 'minJumps']);


// Part Two of Api
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/user/{id}', [UserController::class, 'getUserById']);
Route::get('/users', [UserController::class, 'getUsers']);
Route::put('/user', [UserController::class, 'userUpdate']);
Route::delete('/user/{id}', [UserController::class, 'userDelete']);

Route::get('/projects', [ProjectsController::class, 'getAllProjects']);
Route::get('/project/{id}', [ProjectsController::class, 'getAllProjectsById']);



