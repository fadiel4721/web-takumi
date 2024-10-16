<?php

use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
    
});
// Route::get('/lang/change', [LangController::class, 'change'])->name('changeLang');
Route::get('/lang/change', [LangController::class, 'change'])->name('changeLang');


