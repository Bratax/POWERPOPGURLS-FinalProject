<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\LikhaProjects;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LikhaProjectsController;
use App\Http\Controllers\UserSubscriptionController;

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
    return view('welcome');
});

Route::get('/editor', [LikhaProjectsController::class, 'create'])->middleware('auth');

Route::post('editor/store', [LikhaProjectsController::class, 'store'])->middleware('auth');

Route::delete('/likha/{likha}', [LikhaProjectsController::class, 'destroy'])->middleware('auth');

Route::get('/likha/{likha}/edit', [LikhaProjectsController::class, 'edit']);

Route::put('/likha/{likha}/edit', [LikhaProjectsController::class, 'update']);

Route::get('/likha/{likha}', [LikhaProjectsController::class, 'show']);

// subscription

Route::get('/subscribe', [UserSubscriptionController::class, 'show']);

Route::post('/subscribe/premium', [UserSubscriptionController::class, 'store']);

Route::delete('/subscribe/cancel', [UserSubscriptionController::class, 'destroy']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [LikhaProjectsController::class, 'index'])->name('dashboard');
});
