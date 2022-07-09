<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\FormAuthController;
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

//<------------START (VIEWS)-------------------------------->
#->HOME
Route::get('/', function () {
    return view('vw_home');
})->name('site.home');
#->FORM DE CADASTRO
Route::get('/cadastro',[FormAuthController::class,'ShowRegisterForm'])->name('form.cadastro');
#->FORM DE LOGIN
Route::get('/login',[FormAuthController::class,'ShowLoginForm'])->name('form.login');

//<------------END (VIEWS)----------------------------------->

//<------------START POSTS(REQUESTS)-------------------------------->
#->CADASTRAR ÚSUARIO
Route::post('/action_register',[FormAuthController::class,'Register'])->name('action.register');
