<?php

namespace App\Http\Controllers\Acount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcountController extends Controller
{
    public function ShowProfile()
    {
        return view('internal.user.vw_perfil');
    }

    public function logout()
    {
        Auth::logout();
    }


}
