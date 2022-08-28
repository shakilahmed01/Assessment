<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
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
  $lists=Task::latest()->simplePaginate(5);
    return view('kanban.kanban_board1',compact('lists'));
});

Route::get('kanban/board',[App\Http\Controllers\DashboardController::class, 'view'])->name('kanban');
Route::get('kanban/board/edit/{id}',[App\Http\Controllers\DashboardController::class, 'edit_task'])->name('edit_task');
Route::post('post/kanban/board',[App\Http\Controllers\DashboardController::class, 'post_task'])->name('post_kanban');
Route::post('update/kanban/board',[App\Http\Controllers\DashboardController::class, 'update_task'])->name('update_task');
