<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'index'])->name('welcome.index');
Route::get('/inicio', [Controller::class, 'index'])->name('welcome.index');
Route::get('/quem-somos', [Controller::class, 'about'])->name('welcome.about');
Route::get('/vagas', [Controller::class, 'jobs'])->name('welcome.jobs');
Route::get('/contato', [Controller::class, 'contact'])->name('welcome.contact');
