<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AttackController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CelebrityController;
use App\Http\Controllers\HashtagController;
use App\Http\Controllers\LivetrackerController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionModelController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::view('/', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::get('cities-trash', [CityController::class, 'trash'])->name('cities.trash');
    Route::get('cities/{id}/restore', [CityController::class, 'restore'])->name('cities.restore');
    Route::post('cities/bulk', [CityController::class, 'bulk'])->name('cities.bulk');
    Route::post('cities/autocomplete', [CityController::class, 'autocomplete'])->name('cities.autocomplete');
    Route::resource('cities', CityController::class);

    Route::get('countries-trash', [CountryController::class, 'trash'])->name('countries.trash');
    Route::get('countries/{id}/restore', [CountryController::class, 'restore'])->name('countries.restore');
    Route::post('countries/bulk', [CountryController::class, 'bulk'])->name('countries.bulk');
    Route::post('countries/autocomplete', [CountryController::class, 'autocomplete'])->name('countries.autocomplete');
    Route::resource('countries', CountryController::class);

    Route::get('states-trash', [StateController::class, 'trash'])->name('states.trash');
    Route::get('states/{id}/restore', [StateController::class, 'restore'])->name('states.restore');
    Route::post('states/bulk', [StateController::class, 'bulk'])->name('states.bulk');
    Route::post('states/autocomplete', [StateController::class, 'autocomplete'])->name('states.autocomplete');
    Route::resource('states', StateController::class);

    Route::get('attacks-trash', [AttackController::class, 'trash'])->name('attacks.trash');
    Route::get('attacks/{id}/restore', [AttackController::class, 'restore'])->name('attacks.restore');
    Route::post('attacks/bulk', [AttackController::class, 'bulk'])->name('attacks.bulk');
    Route::post('attacks/autocomplete', [AttackController::class, 'autocomplete'])->name('attacks.autocomplete');
    Route::resource('attacks', AttackController::class);

    Route::get('brands-trash', [BrandController::class, 'trash'])->name('brands.trash');
    Route::get('brands/{id}/restore', [BrandController::class, 'restore'])->name('brands.restore');
    Route::post('brands/bulk', [BrandController::class, 'bulk'])->name('brands.bulk');
    Route::post('brands/autocomplete', [BrandController::class, 'autocomplete'])->name('brands.autocomplete');
    Route::resource('brands', BrandController::class);

    Route::get('barcodes-trash', [BarcodeController::class, 'trash'])->name('barcodes.trash');
    Route::get('barcodes/{id}/restore', [BarcodeController::class, 'restore'])->name('barcodes.restore');
    Route::post('barcodes/bulk', [BarcodeController::class, 'bulk'])->name('barcodes.bulk');
    Route::post('barcodes/autocomplete', [BarcodeController::class, 'autocomplete'])->name('barcodes.autocomplete');
    Route::resource('barcodes', BarcodeController::class);

    Route::get('celebrities-trash', [CelebrityController::class, 'trash'])->name('celebrities.trash');
    Route::get('celebrities/{id}/restore', [CelebrityController::class, 'restore'])->name('celebrities.restore');
    Route::post('celebrities/bulk', [CelebrityController::class, 'bulk'])->name('celebrities.bulk');
    Route::post('celebrities/autocomplete', [CelebrityController::class, 'autocomplete'])->name('celebrities.autocomplete');
    Route::resource('celebrities', CelebrityController::class);

    Route::get('hashtags-trash', [HashtagController::class, 'trash'])->name('hashtags.trash');
    Route::get('hashtags/{id}/restore', [HashtagController::class, 'restore'])->name('hashtags.restore');
    Route::post('hashtags/bulk', [HashtagController::class, 'bulk'])->name('hashtags.bulk');
    Route::post('hashtags/autocomplete', [HashtagController::class, 'autocomplete'])->name('hashtags.autocomplete');
    Route::resource('hashtags', HashtagController::class);

    Route::get('regions-trash', [RegionController::class, 'trash'])->name('regions.trash');
    Route::get('regions/{id}/restore', [RegionController::class, 'restore'])->name('regions.restore');
    Route::post('regions/bulk', [RegionController::class, 'bulk'])->name('regions.bulk');
    Route::post('regions/autocomplete', [RegionController::class, 'autocomplete'])->name('regions.autocomplete');
    Route::resource('regions', RegionController::class);

    Route::get('live-trackers-trash', [LivetrackerController::class, 'trash'])->name('livetrackers.trash');
    Route::get('live-trackers/{id}/restore', [LivetrackerController::class, 'restore'])->name('livetrackers.restore');
    Route::post('live-trackers/bulk', [LivetrackerController::class, 'bulk'])->name('livetrackers.bulk');
    Route::post('live-trackers/autocomplete', [LivetrackerController::class, 'autocomplete'])->name('livetrackers.autocomplete');
    Route::resource('live-trackers', LivetrackerController::class);

    Route::get('media-trash', [MediaController::class, 'trash'])->name('media.trash');
    Route::get('media/{id}/restore', [MediaController::class, 'restore'])->name('media.restore');
    Route::post('media/bulk', [MediaController::class, 'bulk'])->name('media.bulk');
    Route::post('media/autocomplete', [MediaController::class, 'autocomplete'])->name('media.autocomplete');
    Route::resource('media', MediaController::class);

    Route::post('sessions/bulk', [SessionModelController::class, 'bulk'])->name('sessions.bulk');
    Route::post('sessions/autocomplete', [SessionModelController::class, 'autocomplete'])->name('sessions.autocomplete');
    Route::resource('sessions', SessionModelController::class);

    Route::resource('permissions',[PermissionController::class])->except(['show']); //permissions
    Route::resource('roles',[RoleController::class])->except(['show']); //roles
});
