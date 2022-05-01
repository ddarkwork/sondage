<?php

use Illuminate\Support\Facades\Route;
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

Route::get('finalisation', [SurveyController::class, 'finalisation'])->name('finalisation');




Route::get('administration', [SurveyController::class, 'administration'])->name('administration');

Route::get('questionnaire', [SurveyController::class, 'questionnaire'])->name('questionnaire');

Route::get('reponses', [SurveyController::class, 'reponses'])->name('reponses');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';