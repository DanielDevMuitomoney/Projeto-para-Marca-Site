<?php

namespace App\Http\Controllers\Internal;
use App\Models\curso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternalController extends Controller
{
    public function ShowCursos()
    {
        
        $cursos=Curso::all();
        
        return view('internal.cursos',
        [
            'cursos' => $cursos,
        ]);
    }

    public function ShowCurso(curso $id)
    {

        return view('internal.cursos.vw_VerCurso',
        [
            'curso'=>$id
        ]);
    }
}
