<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function showFormResetPassword()
    {
        return view('auth.reset-password');
    }

    public function doResetPassword(Request $request)
    {
        dd("belum kelar");
    }
}
