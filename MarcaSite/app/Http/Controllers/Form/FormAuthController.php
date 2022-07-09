<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormAuthController extends Controller
{
    public function ShowLoginForm()
    {
        return view('forms/vw_FormLogin');
    }
    public function ShowRegisterForm()
    {
        return view('forms/vw_RegisterForm');
    }
}
