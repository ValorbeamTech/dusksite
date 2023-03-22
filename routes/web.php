<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;
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

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/about', [SiteController::class, 'about'])->name('site.about');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('/testimonial', [SiteController::class, 'testimonial'])->name('site.testimonial');
Route::get('/member', [SiteController::class, 'member'])->name('site.member');
Route::get('/service', [SiteController::class, 'service'])->name('site.service');
Route::get('/appointment', [SiteController::class, 'appointment'])->name('site.appointment');
Route::get('/project', [SiteController::class, 'project'])->name('site.project');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function (){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('resource/about', AboutController::class);
    Route::resource('resource/testimonial', TestimonialController::class);
    Route::resource('resource/project', ProjectController::class);
    Route::resource('resource/contact', ContactController::class);
    Route::resource('resource/service', ServiceController::class);
    Route::resource('resource/post', PostController::class);
    Route::resource('resource/member', MemberController::class);
    Route::resource('resource/appointment', AppointmentController::class);

});

require __DIR__.'/auth.php';
