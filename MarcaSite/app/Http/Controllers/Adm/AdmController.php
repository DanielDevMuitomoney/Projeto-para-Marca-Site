<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\curso;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{
    //VWS
    public function ShowCadastroCurso()
    {
        return view('adm.vw_CadastroCurso');
    }
    public function ShowMeusCursos()
    {
        $user=User::where('id',Auth::User()->id)->first();
        $meus_cursos= $user->cursos()->get();
        return view('adm.vw_MeusCursos',
        [
            'my_cursos' =>$meus_cursos
        ]);
    }
    public function ShowAdmHome()
    {
        return view('adm.vw_HomeAdm');
    }
    //Requests
    public function Create_Curse(Request $request)
    {
        $create_cursos=new curso() ;
        $create_cursos->titulo=$request->titulo;
        $create_cursos->Descricão=$request->desc;
        $create_cursos->img_path='teste img';
        $create_cursos->preco=$request->valor;
        $create_cursos->fk_user=Auth::user()->id;
        $create_cursos->dt_inicio=$request->dt_inicio;
        $create_cursos->dt_final=$request->dt_fim;
        $create_cursos->qtd_maxAlunos=$request->qtd_max;
        $create_cursos->save();

    }
}
