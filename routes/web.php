<?php

use Illuminate\Support\Facades\Route;

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






Route::get('/', function () {
    return view('welcome');
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//teter mail
Route::get('send-mail', function () {   

    $contenu = [

        'title' => 'Mail depuis mon application',
        'body' => 'Ce mail est pour tester l\'envoi de mail depuis mon application'

    ];   

    \Mail::to('barryabba85@gmail.com')->send(new \App\Mail\ContactMail($contenu));   

    dd("Email envoyé avec succès.");

});



//test excel
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/export', [App\Http\Controllers\ProductController::class, 'export']);




//email routes
Route::name('auth.resend_confirmation')->get('/register/confirm/resend', 'Auth\RegisterController@resendConfirmation');
Route::name('auth.confirm')->get('/register/confirm/{confirmation_code}', 'Auth\RegisterController@confirm');



//Route::resource('/emprunt', 'EmpruntController');

//Route::post('/emprunt','EmpruntController@store')->name('emprunt');

//Route::post('/emprunt', [App\Http\Controllers\EmpruntController::class, 'store'])->name('emprunt');

Route::POST('/emprunt', [App\Http\Controllers\EmpruntController::class, 'store']);
Route::get('/emprunt', [App\Http\Controllers\EmpruntController::class, 'index']);

Route::get('/query', [App\Http\Controllers\EmpruntController::class, 'indexQ']);