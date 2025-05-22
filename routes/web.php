<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en','nl'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/fml-kfml', function () {
    return view('fml-kfml');
});
Route::get('/custom-form', function () {
    return view('custom-form');
});
Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact-us', function () {
    return view('contact');
});
// Admin interface
Route::get('/admin', function () {
    return view('admin');
});
Route::post('/email-message', [MailController::class, 'sendEmail'])->name('email-message');

Route::post('/admin/save', function () {
    $newData = request()->all();
    file_put_contents(resource_path('data/content.json'), json_encode($newData, JSON_PRETTY_PRINT));
    return redirect('/admin');
});