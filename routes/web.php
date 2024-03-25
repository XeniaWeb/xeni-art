<?php

use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Resume\ResumeController;
use App\Http\Controllers\Vacancy\EmployerController;
use App\Http\Controllers\Vacancy\VacancyController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);

})->name('welcome');

// Route::get('/', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies.list');
Route::resource('/vacancies', VacancyController::class);
Route::get('/employers', [EmployerController::class, 'index'])->name('employers.list');

Route::get('/cv/ru', [ResumeController::class, 'showCvRu'])->name('cv.ru');
Route::get('/cv/en', [ResumeController::class, 'showCvEn'])->name('cv.en');
Route::get('/cv/de', [ResumeController::class, 'showCvDe'])->name('cv.de');
Route::resource('/cv', ResumeController::class);
Route::get('/pdf', [ResumeController::class, 'downloadPdf'])->name('download_pdf');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified', 'web'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
