<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\EnergyFoodController;
use App\Http\Controllers\BoduBuildingFoodController;
use App\Http\Controllers\ProtectiveFoodController;
use App\Http\Controllers\MealPlanController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SaveDailyLogController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[App\Http\Controllers\FrontendController::class,'index'])->name('homepage');
Route::get('/about', [FrontendController::class,'about'])->name('aboutpage');
Route::get('/mealplanpage',[App\Http\Controllers\FrontendController::class,'mealplanpage'])->name('mealplanpage');
Route::get('/resultpage',[App\Http\Controllers\FrontendController::class,'resultpage'])->name('resultpage');
Route::get('/energy',[App\Http\Controllers\FrontendController::class,'energy'])->name('energypage');


Route::resource('diseases', App\Http\Controllers\DiseaseController::class);
Route::resource('energy-foods', EnergyFoodController::class);
Route::resource('bodybuilding-foods', BoduBuildingFoodController::class);
Route::resource('protective-foods', ProtectiveFoodController::class);
Route::resource('meal-plans', MealPlanController::class);



Route::post('/Dietnutri/SaveDailyLogController', [SaveDailyLogController::class, 'store'])->name('dailylog.store');

Route::get('/table', [App\Http\Controllers\BackendTemplateController::class, 'tablefun'])->name('tablepage');
