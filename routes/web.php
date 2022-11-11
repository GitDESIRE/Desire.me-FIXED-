<?php

use App\Http\Controllers\FileManagerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SendController;
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
Route::post('newCandidate',[SendController::class, 'newCandidate']);
Route::post('newOrder',[SendController::class, 'newOrder']);
Route::post('newRequest',[SendController::class, 'newRequest']);

Route::get('/policy',[PrivacyController::class,'polity'])->name('privacy.polity');
Route::get('/',[IndexController::class,'index'])->name('index');

Route::prefix('service')->group(function(){
    Route::get('/',[ServiceController::class,'index'])->name('service.index');
    Route::get('/start',[ServiceController::class, 'star'])->name('service.star');
    Route::get('/arrow',[ServiceController::class, 'arrow'])->name('service.arrow');
    Route::get('/web',[ServiceController::class, 'web'])->name('service.web');
    Route::get('/seo',[ServiceController::class, 'seo'])->name('service.seo');
    Route::get('/rate',[ServiceController::class, 'rate'])->name('service.rate');

});
Route::prefix('portfolio')->group(function () {
    Route::get('/',[PortfolioController::class,'index'])->name('portfolio');
    Route::get('/dolfie',[PortfolioController::class, 'dolfie'])->name('portfolio.dolfie');
    Route::get('/hike',[PortfolioController::class, 'hike'])->name('portfolio.nike');
    Route::get('/noiseland',[PortfolioController::class, 'noiseland'])->name('portfolio.noiseland');
    Route::get('/tocha',[PortfolioController::class, 'tocha'])->name('portfolio.tocha');
});
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/project/new', [ProjectController::class, 'new'])->name('new');
