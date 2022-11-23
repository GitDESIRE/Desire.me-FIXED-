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

Route::post('newCandidate', [SendController::class, 'newCandidate'])->name('newCandidate');
Route::post('newOrder', [SendController::class, 'newOrder'])->name('newOrder');
Route::post('newRequest', [SendController::class, 'newRequest'])->name('newRequest');

Route::get('/policy', [PrivacyController::class, 'polity'])->name('privacy.polity');
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/web-design-and-dev', [ServiceController::class, 'web'])->name('service.web');
Route::get('/promotion', [ServiceController::class, 'seo'])->name('service.promotion');

Route::prefix('/complex-tariffs')->group(function () {
    Route::get('/', [ServiceController::class, 'rate'])->name('service.rate');
    Route::get('/start', [ServiceController::class, 'star'])->name('service.star');
    Route::get('/arrow', [ServiceController::class, 'arrow'])->name('service.arrow');
    Route::get('/full-digital', [ServiceController::class, 'digital'])->name('service.digital');
    Route::get('/influencer', [ServiceController::class, 'influencer'])->name('service.influencer');
});


Route::prefix('projects')->group(function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/dolfie', [PortfolioController::class, 'dolfie'])->name('portfolio.dolfie');
    Route::get('/hike', [PortfolioController::class, 'hike'])->name('portfolio.nike');
    Route::get('/noiceland', [PortfolioController::class, 'noiseland'])->name('portfolio.noiseland');
    Route::get('/tocha', [PortfolioController::class, 'tocha'])->name('portfolio.tocha');
    Route::get('/atlant', [PortfolioController::class, 'atlant'])->name('portfolio.atlant');
});
Route::get('/about-us', [AboutController::class, 'about'])->name('about');
Route::get('/new-project', [ProjectController::class, 'new'])->name('new');
