<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function ShowCadastroCurso()
    {
        return view('adm.vw_CadastroCurso');
    }
}
