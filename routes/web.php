<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartementController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/donations', [HomeController::class,'donations'])->name('donations');
Route::get('/donation-details', [HomeController::class,'donation_details'])->name('donation-details');
Route::get('/donate-now', [HomeController::class,'donate_now'])->name('donate-now');
Route::get('/events', [HomeController::class,'events'])->name('events');
Route::get('/event-details', [HomeController::class,'event_details'])->name('event-details');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/departements', [HomeController::class,'departements'])->name('departements');
Route::get('/departement-details', [HomeController::class,'departement_details'])->name('departement-details');
Route::get('/trainings', [HomeController::class,'trainings'])->name('trainings');
Route::get('/blog-details', [HomeController::class,'blog_details'])->name('blog-details');
Route::get('/become-volunteer', [HomeController::class,'become_volunteer'])->name('become-volunteer');


Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/event', [EventController::class, 'index'])->name('event');
Route::post('/admin/create_event', [EventController::class, 'store'])->name('event_store');
Route::put('/admin/update_event/{id}', [EventController::class, 'update'])->name('event_update');
Route::delete('/admin/destroy_event/{id}', [EventController::class, 'destroy'])->name('event_destroy');

Route::get('/admin/training', [TrainingController::class, 'index'])->name('training');
Route::post('/admin/create_training', [TrainingController::class, 'store'])->name('training_store');
Route::put('/admin/update_training/{id}', [TrainingController::class, 'update'])->name('training_update');
Route::delete('/admin/destroy_training/{id}', [TrainingController::class, 'destroy'])->name('training_destroy');

Route::get('/admin/donation', [DonationController::class, 'index'])->name('donation');
Route::post('/admin/create_donation', [DonationController::class, 'store'])->name('donation_store');
Route::put('/admin/update_donation/{id}', [DonationController::class, 'update'])->name('donation_update');
Route::delete('/admin/destroy_donation/{id}', [DonationController::class, 'destroy'])->name('donation_destroy');

Route::get('/admin/departement', [DepartementController::class, 'index'])->name('departement');
Route::post('/admin/create_departement', [DepartementController::class, 'store'])->name('departement_store');
Route::put('/admin/update_departement/{id}', [DepartementController::class, 'update'])->name('departement_update');
Route::delete('/admin/destroy_departement/{id}', [DepartementController::class, 'destroy'])->name('departement_destroy');
