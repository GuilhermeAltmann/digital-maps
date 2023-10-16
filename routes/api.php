<?php

use App\Pinterest\Presentation\Http\AddPinterestController;
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

Route::prefix('v1')->group(function(){
   Route::post('pinterest', AddPinterestController::class)->name('api.v1.pinterest');
});
