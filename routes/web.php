<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\WhatsAppController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ClientsNumController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ClientsReviewController;
use App\Http\Controllers\YoutubePremiumController;

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

// Authintication

Auth::routes(['register' => false]);

// ***************************************
// ***************************************
// Programes
// ***************************************
// ***************************************

Route::middleware(['auth'])->group(function () {

    // Home
    Route::get('/admin', [HomeController::class, 'index'])->name('home');

    Route::resource('/admin/sections', SectionController::class);
    Route::resource('/admin/products', ProductController::class);
    Route::resource('/admin/whatsApp', WhatsAppController::class);

    // Clients
    Route::resource('/admin/clientsNum', ClientsNumController::class);

    Route::resource('/admin/clientsReview', ClientsReviewController::class);

    // subscriber
    Route::resource('/admin/subscribers', SubscriberController::class);

    // Permission
    Route::resource('/admin/users', UserController::class);

    // ******************************
    // Dashboard
    // ******************************
    // Route::get('/{page}', [AdminController::class, 'index']);
});

// ***************************************
// ***************************************
// FrontEnd
// ***************************************
// ***************************************
Route::get('/',[IndexController::class, 'index']);

Route::get('/youtube-premium',[YoutubePremiumController::class, 'index']);

Route::get('/plus',[PlusController::class, 'index']);

Route::resource('/customers', CustomersController::class);
