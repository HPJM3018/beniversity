<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

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
Route::get('/donation-details/{donation}', [HomeController::class,'donation_details'])->name('donation-details');
Route::get('/donate-now', [HomeController::class,'donate_now'])->name('donate-now');
Route::get('/events', [HomeController::class,'events'])->name('events');
Route::get('/event-details/{event}', [HomeController::class,'event_details'])->name('event-details');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/departements', [HomeController::class,'departements'])->name('departements');
Route::get('/departement-details/{departement}', [HomeController::class,'departement_details'])->name('departement-details');
Route::get('/trainings', [HomeController::class,'trainings'])->name('trainings');
Route::get('/blog-details', [HomeController::class,'blog_details'])->name('blog-details');
Route::get('/become-volunteer', [HomeController::class,'become_volunteer'])->name('become-volunteer');


Route::get('/admin', [AdminController::class, 'index'])->name('admin');

#Training
Route::get('/admin/training', [TrainingController::class, 'index'])->name('training');
Route::post('/admin/create_training', [TrainingController::class, 'store'])->name('training.store');
Route::get('/admin/creates_training', [TrainingController::class, 'create'])->name('training.create');
Route::get('/admin/edit_training{id}', [TrainingController::class, 'edit'])->name('training.edit');
Route::put('/admin/updates_training{id}', [TrainingController::class, 'update'])->name('training.update');
Route::delete('/admin/destroy_training/{id}', [TrainingController::class, 'destroy'])->name('training.destroy');
#Blogs
Route::get('/admin/blog', [BlogController::class, 'index'])->name('blogs');
Route::get('/users/show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/admin/create_blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/admin/creates_blog', [BlogController::class, 'create'])->name('blog.create');
Route::get('/admin/blogs/edit_blog{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/admin/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
#Route::get('/admin/destroys_blog/{id}', [BlogController::class, 'destroys'])->name('blogs.destroy');
Route::delete('/admin/destroy_blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
#contacts
Route::get('/admin/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/admin/donations', [DonationController::class, 'index'])->name('donations.index');
Route::get('/admin/donations/create', [DonationController::class, 'create'])->name('donations.create');
Route::post('/admin/donations', [DonationController::class, 'store'])->name('donations.store');
Route::get('/admin/donations/{donation}/edit', [DonationController::class, 'edit'])->name('donations.edit');
Route::put('/admin/donations/{donation}', [DonationController::class, 'update'])->name('donations.update');
Route::delete('/admin/donations/{donation}', [DonationController::class, 'destroy'])->name('donations.destroy');
Route::get('/admin/donations/{donation}', [DonationController::class, 'show'])->name('donations.show');


Route::get('/admin/departements', [DepartementController::class, 'index'])->name('departements.index');
Route::get('/admin/departements/create', [DepartementController::class, 'create'])->name('departements.create');
Route::post('/admin/departements', [DepartementController::class, 'store'])->name('departements.store');
Route::get('/admin/departements/{departement}/edit', [DepartementController::class, 'edit'])->name('departements.edit');
Route::put('/admin/departements/{departement}', [DepartementController::class, 'update'])->name('departements.update');
Route::delete('/admin/departements/{departement}', [DepartementController::class, 'destroy'])->name('departements.destroy');
Route::get('/admin/departements/{departement}', [DepartementController::class, 'show'])->name('departements.show');

Route::get('/admin/events', [EventController::class, 'index'])->name('events.index');
Route::get('/admin/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/admin/events', [EventController::class, 'store'])->name('events.store');
Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/admin/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('/admin/events/{event}', [EventController::class, 'show'])->name('events.show');
