<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')
    ->group(function () {

    Route::view('/', 'landing')->name('index');

    Volt::route('live-tracker', 'pages.live.index')
            ->name('live');

    Volt::route('map', 'pages.map.index')
            ->name('map');

    Volt::route('support', 'pages.support.index')
            ->name('support');

    require __DIR__.'/auth.php';
    //require __DIR__.'/admin.php';
});

