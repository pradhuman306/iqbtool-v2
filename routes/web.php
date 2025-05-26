<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'nl','eng'])) {
        if($locale == 'eng'){
            $locale = 'en';
        }
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/fml-kfml', function () {
    return view('fml-kfml');
})->name('fml-kfml');

Route::get('/custom-form', function () {
    return view('custom-form');
})->name('custom-form');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact-us');

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/cookie-policy', function () {
    return view('cookie-policy');
})->name('cookie-policy');

// mail submit route 
Route::post('/contact', [MailController::class, 'submitForm'])->name('contact.submit');
