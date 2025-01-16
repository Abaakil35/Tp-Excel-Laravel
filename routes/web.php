<?php
use App\Http\Controllers\DocumentController;

Route::get('/upload', [DocumentController::class, 'showUploadForm']);
Route::post('/import', [DocumentController::class, 'import']);

Route::get('/', function () {
    return view('welcome');});