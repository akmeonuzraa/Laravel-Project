<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NoteController;
Route::resource('etudiants', EtudiantController::class);
Route::resource('modules', ModuleController::class);
Route::resource('notes', NoteController::class);
 