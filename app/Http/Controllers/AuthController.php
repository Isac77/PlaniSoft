<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'ruc' => 'required|min:11|unique:usuario,ruc',
            'password' => 'required|min:8|confirmed'
        ]);

        $url = Http::get('https://dniruc.apisperu.com/api/v1/ruc/' . $request->ruc . '?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNhbXllc2h1YTcyN0BnbWFpbC5jb20ifQ.0z14bKT2JWPsbs2y9j40RWrW_RvG9XaXtwUh2MRGOyQ');
        $ok =  $url->json()['success'];
        
        if ($ok) {
            $razonSocial = $url->json()['razonSocial'];

            User::create([
                'razonSocial' => $razonSocial,
                'ruc' => $request->ruc,
                'password' => Hash::make($request->password),
            ]);

            return redirect('/login')->with('status', 'Usuario creado, inicie sesión!');
        }

        return redirect()->back()->withInput(['ruc' => $request->ruc])
            ->withErrors(['ruc' => 'El ruc no es válido!']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'ruc' => 'required|min:11',
            'password' => 'required|min:8'
        ]);

        $user = User::where('ruc', $request->ruc)->count();
        if ($user == 0) {
            return redirect()->back()->withInput(['ruc' => $request->ruc])
                ->withErrors(['ruc' => 'El ruc es incorrecto.']);
        }

        $credentials = $request->only('ruc', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')->withSuccess('Signed in');
        }
        return redirect()->back()->withInput(['ruc' => $request->ruc])
            ->withErrors(['password' => 'La contraseña es incorrecta.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
