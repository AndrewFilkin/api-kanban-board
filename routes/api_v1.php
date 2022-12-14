<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiKanban\BackLogDashboardController;
use App\Http\Controllers\ApiKanban\CreateEntryController;

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
Route::get('/', function () {
    return 'welcome';
});

//Api "BackLog" routes kanban
Route::get('todo', [BackLogDashboardController::class, 'getTodo']);
Route::post('create-entry', [BackLogDashboardController::class, 'createEntry']);
Route::put('update-entry/{id}', [BackLogDashboardController::class, 'updateEntry']);
Route::delete('delete-entry/{id}', [BackLogDashboardController::class, 'deleteEntry']);

