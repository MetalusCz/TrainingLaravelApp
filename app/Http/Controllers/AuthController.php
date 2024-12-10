<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Zadaný email není registrován',
            'password' => 'Špatné heslo',
        ])->onlyInput('email');
    }



    public function register()
    {
        return view('register');  // Vrátí pohled pro registraci
    }

    public function store(Request $request)
    {
        // Validace vstupních dat
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'], // Validace pro unikátnost emailu
            'password' => ['required', 'confirmed'], // Heslo musí být potvrzeno
        ]);
    
        // Vytvoření nového uživatele
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // Heslo musí být šifrováno
        ]);
    
        // Přesměrování na registrační stránku s úspěšnou zprávou
        return redirect()->route('index')->with('success', 'Uživatel byl úspěšně vytvořen!');
    }
    
    
}
