<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllDeleteController;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\AdminDonateController;
use App\Http\Controllers\BloodFrontController;
use App\Http\Controllers\MessageRecieverController;
use App\Http\Controllers\DashboardController;

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

// Frontend Rotes:===============================
Route::get('/', function () {
    return view('frontend.home');
})->name('userhome');
Route::get('find-blood-all',[BloodFrontController::class,'index'])->name('blood_all');
Route::get('find-blood-orhpos',[BloodFrontController::class,'orhpos'])->name('orhpos');
Route::get('find-blood-orhneg',[BloodFrontController::class,'orhneg'])->name('orhneg');
Route::get('find-blood-arhpos',[BloodFrontController::class,'arhpos'])->name('arhpos');
Route::get('find-blood-arhneg',[BloodFrontController::class,'arhneg'])->name('arhneg');
Route::get('find-blood-brhpos',[BloodFrontController::class,'brhpos'])->name('brhpos');
Route::get('find-blood-brhneg',[BloodFrontController::class,'brhneg'])->name('brhneg');
Route::get('blood-contact/{id}',[BloodFrontController::class,'contact'])->name('contact');
Route::post('blood-contact-submit',[BloodFrontController::class,'contact_submit'])->name('contact_submit');


// Backend Routes:===============================

//Dashboard
Route::middleware('auth','verified') -> group( function(){
    Route::get('/dashboard',[DashboardController::class,'show'])->name('dashboard');
    Route::resource('user',UserController::class)->middleware('can:isAdmin');
    Route::get('all-delete/user-delete/{id}',[AllDeleteController::class,'user_delete'])->name('user_delete')->middleware('can:isAdmin');
    Route::get('user-trash',[UserController::class,'trash'])->name('user_trash')->middleware('can:isAdmin');
    Route::get('user-trash-restore/{id}',[UserController::class,'restore'])->name('user_restore')->middleware('can:isAdmin');
    Route::get('user-force-delete/{id}',[AllDeleteController::class,'user_force_delete'])->name('user_force_delete');
});

// Donations
Route::middleware('auth','verified') -> group(function () {
    Route::resource('donations',DonationsController::class);
    Route::get('all-delete/donation-delete/{id}',[AllDeleteController::class,'donation_delete'])->name('donation_delete');
    Route::get('donation-trash',[DonationsController::class,'trash'])->name('donation_trash');
    Route::get('donation-trash-restore/{id}',[DonationsController::class,'restore'])->name('donation_restore');
    Route::get('donation-force-delete/{id}',[AllDeleteController::class,'donation_force_delete'])->name('donation_force_delete');

});

// Messages
Route::middleware('auth','verified') -> group(function() {
    Route::get('my-messages',[MessageRecieverController::class,'show'])->name('my_messages');
    Route::get('my-messages-delete/{id}',[MessageRecieverController::class,'remove'])->name('my_messages_delete');
});

// Admin Donations
Route::middleware('auth','verified')->group(function (){
    Route::resource('admin-donations',AdminDonateController::class)->middleware('can:isAdmin');
    Route::get('admin-donations-trash',[AdminDonateController::class,'trash'])->name('admin-donations-trash')->middleware('can:isAdmin');
});

// User Profile
Route::middleware('auth')->group(function () {
    Route::post('/image-profile', [ProfileImageController::class, 'store'])->name('image');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// fallback route
// Route::fallback('not found');
require __DIR__.'/auth.php';

