<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register_inscricao(Request $request)
    {
        $create_inscricao = new registration();
        $create_inscricao->fk_user= Auth::user()->id;
        $create_inscricao->fk_curso=$request->curso;
        $create_inscricao->dt_register=now();
        $create_inscricao->status='Pendente';
        $create_inscricao->save();

        $json['success'] = true;
        echo json_encode($json);
    }
}
