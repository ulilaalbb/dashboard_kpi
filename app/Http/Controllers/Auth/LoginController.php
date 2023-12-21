<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth; //

class LoginController extends Controller
{
    protected $redirectTo = '/home';

    public function logout()
    {
        Auth::logout();

        return redirect('/login'); // Redirect to the desired page after logout
    }
    //
}
