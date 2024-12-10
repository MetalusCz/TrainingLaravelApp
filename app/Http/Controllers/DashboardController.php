<?php

namespace App\Http\Controllers;

use App\Models\Teacher; // Ujisti se, že importuješ správný model
use Illuminate\Support\Facades\Auth; // Přidání Auth
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
    {

        if (!empty(auth()->user()->id)) {
            $userId = auth()->user()->id;
        } else {
            $userId = 1;
        }

        $teachers = Teacher::where('user_id', $userId)->get();


        return view('dashboard', [
            "teachers" => $teachers
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();  // Odhlásí uživatele
        $request->session()->invalidate();  // Zruší session
        $request->session()->regenerateToken();  // Regeneruje CSRF token

        return redirect('/login');  // Přesměruje na přihlašovací stránku
    }

}
