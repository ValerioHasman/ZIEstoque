<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function auth(Request $request) {
        
        $credenciais = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ], [
            'email.required' => 'O campo Email é obrigatório',
            'email.email' => 'Não é Email válido',
            'password.required' => 'O campo Senha é obrigatório',
        ]);

        if(Auth::attempt($credenciais, $request->lembrar)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        } else {
            return redirect()->back()->with('Erro', 'Email ou senha inválidas.');
        }

    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('site.index'));
    }

    public function registrar() {
        return 'vi';
    }
}
