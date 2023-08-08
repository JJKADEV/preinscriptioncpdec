<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    

    public function logout(Request $request)
    {
        

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login'); // Redirige vers la page de connexion
    }
}
