<?php

use App\Http\Controllers\Acount\AcountController;
use App\Http\Controllers\Adm\AdmController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\FormAuthController;
use App\Http\Controllers\Internal\InternalController;
use Faker\Provider\ar_EG\Internet;
use Illuminate\Notifications\Action;
use Mockery\Matcher\Any;

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

//<------------START GETS(VIEWS)-------------------------------->
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
    Route::get('/meus-cursos',[AdmController::class,'ShowMeusCursos']);
    Route::get('/adm',[AdmController::class,'ShowAdmHome'])->name('adm.home');

});

//Middleware Group responsável pela verificação de úsuarios em geral no sistema
Route::middleware(['verifylogin'])->group(function(){

    Route::get('/cursos',[InternalController::class,'ShowCursos'])->name('user.cursos');
    Route::get('/perfil',[AcountController::class,'ShowProfile'])->name('user.profile');
    Route::get('/incricoes',[InternalController::class,'ShowMinhasIncricoes'])->name('user.incritions');
    Route::get('/curso/{id}',[InternalController::class,'ShowCurso'])->name('user.curso');


});


//<------------END (VIEWS)----------------------------------->

//<------------START POSTS(REQUESTS)-------------------------------->
#->CADASTRAR ÚSUARIO
Route::post('/action_register',[FormAuthController::class,'Register'])->name('action.register');
#->LOGAR USUÁRIO
Route::post('/action_login',[FormAuthController::class,'login'])->name('action.login');
#->REALIZAR LOGOUT
Route::get('/action_logout',[AcountController::class,'logout'])->name('action.logout');
#->REALIZAR CADASTRO DE CURSOS
Route::post('/action_create_curse',[AdmController::class,'Create_Curse'])->name('action.create_curse');
#->Registrar Inscrição
Route::post('/registrar_inscricao',[UserController::class,'register_inscricao'])->name('action.registrar.inscricao');