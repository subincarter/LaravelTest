<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('addTask',[TodoController::class,'addTask']);
Route::post('addSubTask',[TodoController::class,'addSubTask']);

Route::get('completeTask/{id}',[TodoController::class,'completeTask']);

Route::get('pendingTasks',[TodoController::class,'pendingTasks']);

Route::get('searchTasks/{keyword}',[TodoController::class,'searchTasks']);

Route::get('filterTasks/{by}',[TodoController::class,'filterTasks']);


Route::delete('deleteTask/{id}',[TodoController::class,'deleteTask']);