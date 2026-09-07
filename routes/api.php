<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ResourceController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SupportGroupController;

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

// Public Routes
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/auth/reset-password', [AuthController::class, 'resetPassword']);

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {
    // Auth
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::get('/auth/user', [AuthController::class, 'user']);
    
    // Resources
    Route::apiResource('resources', ResourceController::class);
    
    // Users
    Route::apiResource('users', UserController::class);
    Route::get('/users/{id}/progress', [UserController::class, 'progress']);
    
    // Support Groups
    Route::apiResource('support-groups', SupportGroupController::class);
    Route::post('/support-groups/{id}/join', [SupportGroupController::class, 'join']);
    Route::post('/support-groups/{id}/leave', [SupportGroupController::class, 'leave']);
});

// Health Check
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now(),
        'version' => config('app.version'),
    ]);
});
