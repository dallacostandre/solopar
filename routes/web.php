<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
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

Route::post('/email', function (Request $request) {
    Mail::send(
        'email-template',
        [
            'title' => 'Contato do site',
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content,
        ],
        function ($m) {
            $m->from('contato@soloparfundacoes.com.br', 'WebSite');
            $m->to('contato@soloparfundacoes.com.br');
            $m->subject('Novo Solicitacao via Site');
        }
    );
    return view('pages.index');
});


