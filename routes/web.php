<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\SemesterController;



Route::get('/index', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route:: get ('/download/{unit_slug}', [DownloadController::class, 'FileDownLoarder',])-> name('download');  ;
Route::get('/{semester_slug}', [SemesterController::class, 'viewUnits']);

// Route:: get ('/semester', [SemesterController::class, 'index']);





