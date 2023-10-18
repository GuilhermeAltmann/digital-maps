<?php


use App\Pinterest\Presentation\Http\Controller\CreatePinterestController;
use App\Pinterest\Presentation\Http\Controller\FindAllPinterestController;
use App\Pinterest\Presentation\Http\Controller\FindByProximityPinterestController;
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
    Route::post('pinterest', CreatePinterestController::class)->name('api.v1.pinterest');
    Route::get('pinterest', FindAllPinterestController::class)->name('api.v1.pinterest');
    Route::get('pinterestByProximity', FindByProximityPinterestController::class)->name('api.v1.pinterestByProximity');
});
