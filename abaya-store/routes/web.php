<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

/*
|--------------------------------------------------------------------------
| الصفحة الرئيسية
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| صفحات المجموعات
| مثال: /collections/luxury - /collections/daily - /collections/events - /collections/winter
|--------------------------------------------------------------------------
*/
Route::get('/collections/{slug}', [CollectionController::class, 'show'])->name('collection.show');