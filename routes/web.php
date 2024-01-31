<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTeste;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('tarefa', [TarefaController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    
    Route::post('tarefa', [TarefaController::class, 'create']);
    Route::delete('tarefa', [TarefaController::class, 'destroy']);
});

Route::get('mensagemteste/', function(){
    $email = 'dev.pablobelmiro@gmail.com';
   Mail::to($email)->send(new MensagemTeste());
   return 'email enviado!';
});