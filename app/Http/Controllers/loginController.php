<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function registro(Request $request)
    {
        //validar los datos

        $user = new User();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect('/index');
    }
    public function login(Request $request)
    {
        // Validar las credenciales
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];
    
        $remember = $request->has('remember');
    
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
    
            // Verificar el rol del usuario
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/peliculas'); // Página de admin
            } else {
                return redirect()->intended('/index'); // Página de usuario
            }
        }
    
        // Si las credenciales son incorrectas
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

}
