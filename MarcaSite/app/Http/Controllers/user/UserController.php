<?php

namespace App\Http\Controllers\user;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register_inscricao(Request $request)
    {
        $registro= registration::where('fk_user','=',Auth::user()->id)->where('fk_curso','=',$request->curso)->first();
        if($registro===null||$registro->count()===0) 
        {
            $create_inscricao = new registration();
            $create_inscricao->fk_user= Auth::user()->id;
            $create_inscricao->fk_curso=$request->curso;
            $create_inscricao->dt_register=now();
            $create_inscricao->status="pendente";
            $create_inscricao->save();
    
            $json['success'] = true;
            echo json_encode($json);
        }
        else
        {
            $json['sucess']=false;
            $json['error']='Você já se inscreveu para este curso veja outros em: <a href="/cursos">Cursos<a>';
            echo json_encode($json);
        }
        
       
        
    }
    public function ShowMinhasIncricoes()
    {
        $registers= DB::table('registrations')->join('users','registrations.fk_user','=','users.id')
        ->join('cursos','registrations.fk_curso','=','cursos.id')
        ->where('registrations.fk_user','=',Auth::user()->id)->get();   

        
        
        

            
        return view('internal.user.vw_MinhasInscricoes',
        [
            'registers'=> $registers,
        ]);
    }
}
