<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CategoryController::class, 'createTask'])->name('route-add-task');
Route::post('/', [CategoryController::class, 'postcreateTask'])->name('route-post-task');


Route::get('alltask', [CategoryController::class, 'allTask'])->name('route-all-task');


Route::get('edittask/{id}', [CategoryController::class, 'editTask'])->name('route-edit-task');


Route::put('updatetask/{id}', [CategoryController::class, 'updateTask'])->name('route-update-task');

Route::delete('deletetask/{id}' , [CategoryController::class, 'deleteTask'])->name('route-delete-task');
