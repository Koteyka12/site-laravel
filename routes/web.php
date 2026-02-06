<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\FilialenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarriereController;
use App\Http\Controllers\LeistungenController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/leistungen', [LeistungenController::class, 'index'])->name('leistungen.index');

Route::get('/filialen', [FilialenController::class, 'index'])->name('filialen.index');

Route::get('/karriere', [KarriereController::class, 'index'])->name('karriere.index');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/kontakt', [ContactRequestController::class, 'create'])->name('contact.create');
Route::post('/kontakt', [ContactRequestController::class, 'store'])->name('contact.store');
