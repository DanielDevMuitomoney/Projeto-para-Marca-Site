<?php

namespace App\Http\Controllers\Acount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcountController extends Controller
{
    public function logout()
    {
        Auth::logout();
    }
}
