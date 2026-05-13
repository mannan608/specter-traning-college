<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\FrontendController;
use App\SEO\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'landingPage'])->name('home');
Route::get('/about', [FrontendController::class, 'aboutPage'])->name('about');
Route::get('/qualifications', [FrontendController::class, 'qualificationsPage'])->name('qualifications');
Route::get('/contact', [FrontendController::class, 'contactPage'])->name('contact');



Route::get('/qualifications/{slug}', [CourseController::class, 'courseDetails'])
    ->name('qualifications.details');
    // legal page
Route::get('/legal/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/legal/terms-of-service', [FrontendController::class, 'termsOfService'])->name('terms-of-service');
Route::get('/legal/accreditations', [FrontendController::class, 'accreditations'])->name('accreditations');
Route::get('/legal/cookie-policy', [FrontendController::class, 'cookiePolicy'])->name('cookie-policy');


Route::post('/apply', [CourseController::class, 'apply'])->name('qualifications.apply');

Route::get('/download-brochure', function () {
    return response()->download(
        public_path('brochure.pdf'),
        'brochure.pdf'
    );
})->name('download.brochure');


Route::get('/generate-sitemap', [SitemapController::class, 'generate']);


Route::get('/blogs', [BlogController::class, 'index'])
    ->name('blogs.index');

Route::get('/blogs/{slug}', [BlogController::class, 'show'])
    ->name('blogs.show');

Route::get('/events', [EventController::class, 'index'])
    ->name('events.index');

Route::get('/events/{slug}', [EventController::class, 'show'])
    ->name('events.show');