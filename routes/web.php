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

Route::get('/', function () {return view('pages.index');})->name('home');
Route::get('/sobre-a-solopar', function () {return view('pages.about');})->name('about');
Route::get('/servicos-da-solopar', function () {return view('pages.services');})->name('services');
Route::get('/projetos-realizado-pela-solopar', function () {return view('pages.projects');})->name('projects');
Route::get('/entrar-em-contato-solopar', function () {return view('pages.contact');})->name('contact');


