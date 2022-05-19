<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SurveyController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [SurveyController::class, 'index'])->name('index');

Route::get('contact', [SurveyController::class, 'contact'])->name('contact');

Route::get('finalisation/{token?}', [SurveyController::class, 'finalisation'])->name('finalisation');




Route::get('administration', [AdminController::class, 'administration'])->name('administration');

Route::get('questionnaire', [AdminController::class, 'questionnaire'])->name('questionnaire');

Route::get('reponses', [AdminController::class, 'reponses'])->name('reponses');

Route::get('reponse/{token}', [SurveyController::class, 'reponse'])->name('reponse');

Route::post('store', [SurveyController::class, 'store'])->name('questionnaire.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
