<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
     $lang = request('lang', 'nl');
    $data = json_decode(file_get_contents(resource_path('data/'.$lang.'.json')), true);
    return view('home', ['content' => $data ?? []]);
})->name('home');

Route::get('/home', function () {
     $lang = request('lang', 'nl');
    $data = json_decode(file_get_contents(resource_path('data/'.$lang.'.json')), true);
    return view('home', ['content' => $data ?? []]);
})->name('home');

Route::get('/about', function () {
    $lang = request('lang', 'nl');
    $data = json_decode(file_get_contents(resource_path('data/'.$lang.'.json')), true);
    return view('about', ['content' => $data[$lang] ?? []]);
});
Route::get('/contact', function () {
    $lang = request('lang', 'nl');
    $data = json_decode(file_get_contents(resource_path('data/'.$lang.'.json')), true);
    return view('contact', ['content' => $data[$lang] ?? []]);
});
// Admin interface
Route::get('/admin', function () {
   $lang = request('lang', 'nl');
    $data = json_decode(file_get_contents(resource_path('data/'.$lang.'.json')), true);
    return view('admin', ['data' => $data]);
});
Route::post('/email-message', [MailController::class, 'sendEmail'])->name('email-message');
Route::post('/admin/save', function () {
    $newData = request()->all();
    file_put_contents(resource_path('data/content.json'), json_encode($newData, JSON_PRETTY_PRINT));
    return redirect('/admin');
});