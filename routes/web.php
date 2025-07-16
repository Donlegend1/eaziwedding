<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WeddingCardController;
use App\Http\Controllers\EventScheduleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\RSVPManagerController;
use App\Http\Controllers\CustomizationController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\SubscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/faq', 'faq');

Auth::routes(['verify' => true]);

Route::middleware(['verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('user')->group(function () {
        Route::get('/weddings', [WeddingController::class, 'index']);
        Route::get('/weddings/create', [WeddingController::class, 'create']);
        Route::post('/weddings/create', [WeddingController::class, 'store'])->name('weddings.store');
    });

    Route::prefix('couple')->group(function () {
        Route::get('/wedding-card', [WeddingCardController::class, 'index']);
        Route::post('/couple/wedding-card', [WeddingCardController::class, 'store'])->name('wedding-card.save');
        Route::get('/couple/wedding-card/download', [WeddingCardController::class, 'download'])->name('wedding-card.download');
        Route::get('/couple/wedding-card/share', [WeddingCardController::class, 'share'])->name('wedding-card.share');

        Route::get('/event-schedule', [EventScheduleController::class, 'index']);
        Route::get('/gallery', [GalleryController::class, 'index']);
        Route::get('/venue-directions', [VenueController::class, 'index']);
        Route::get('/rsvp-manager', [RSVPManagerController::class, 'index']);
        Route::get('/customize-page', [CustomizationController::class, 'index']);
        Route::get('/my-wedding-link', [WeddingController::class, 'show']);
        Route::get('/billing', [SubscriptionController::class, 'index']);
    });
});
