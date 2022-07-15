<?php

namespace App\Http\Controllers\Acount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AcountController extends Controller
{
    public function ShowProfile()
    {
        $basic_infos= User::where('id','=',Auth::user()->id)->first();
        return view('internal.user.vw_perfil',
        [
            'infos'=>$basic_infos
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }






}
