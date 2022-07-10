<?php

use App\Http\Controllers\Acount\AcountController;
use App\Http\Controllers\Adm\AdmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\FormAuthController;
use App\Http\Controllers\Internal\InternalController;

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

//Middleware Group responsável pela verificação de administradores do sistema
Route::middleware(['verify_adm'])->group(function(){

    Route::get('/adm/cadastroCursos',[AdmController::class,'ShowCadastroCurso'])->name('adm.cadastro.cursos');

    Route::get('/cursos',[InternalController::class,'ShowCursos'])->name('user.cursos');
});
//<------------END (VIEWS)----------------------------------->

//<------------START POSTS(REQUESTS)-------------------------------->
#->CADASTRAR ÚSUARIO
Route::post('/action_register',[FormAuthController::class,'Register'])->name('action.register');
#->LOGAR USUÁRIO
Route::post('/action_login',[FormAuthController::class,'login'])->name('action.login');
Route::get('/action_logout',[AcountController::class,'logout'])->name('action.logout');
