<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\OrderController;
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function(){
	// GetMenu
	Route::get('getMenu',[MenuController::class, 'getMenu']);
	Route::get('getSubmenu',[SubmenuController::class, 'getSubmenu']);
	
});