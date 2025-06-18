<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
    return response([
        'message' => 'hello world',
    ], 200);
});
Route::get('/tasks', [App\Http\Controllers\TodoController::class, 'index']);

Route::post('/tasks', [App\Http\Controllers\TodoController::class, 'store']);

Route::post('/tasks/{task}', [App\Http\Controllers\TodoController::class, 'update']);

Route::get('/tasks/{task}', [App\Http\Controllers\TodoController::class, 'destroy']);
