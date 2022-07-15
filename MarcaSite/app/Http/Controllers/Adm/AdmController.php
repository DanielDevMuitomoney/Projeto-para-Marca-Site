<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\curso;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function ShowTable($id_curso)
    {
        $table= DB::table('registrations')->join('users','registrations.fk_user','=','users.id')
        ->join('cursos','registrations.fk_curso','=','cursos.id')
        ->where('fk_curso','=',$id_curso)
        ->get(); 
       $curso=Curso::where('id','=',$id_curso)->first();
         
        return view('adm.vw_Table',
        [
            'tb'=> $table,
            'curso' => $curso
        ]);
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

        $data['success']=true;
        echo json_encode($data);

    }

}
