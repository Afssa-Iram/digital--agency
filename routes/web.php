<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{portfolio}', [FrontendController::class, 'portfolioShow'])->name('portfolio.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('services', ServiceController::class);
        Route::resource('portfolio', PortfolioController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('banners', BannerController::class);
        Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
    });

require __DIR__.'/auth.php';

