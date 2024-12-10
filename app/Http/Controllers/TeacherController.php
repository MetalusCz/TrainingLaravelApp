<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; // Import namespace
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function validTitle(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'nullable|in:' . implode(',', Teacher::VALID_TITLES),
        ]);

        // Pro ukázku návrat nějakého redirectu:
        return redirect()->back()->with('success', 'Title validated successfully!');
    }

    public function create()
    {
        return view('teacher_create');  // Tento view musíš vytvořit
    }

    public function store(Request $request)
    {
        // Validace dat z formuláře
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'personal_number' => 'required|unique:teachers,personal_number|max:20',
        ]);

        // Vytvoření nového učitele v databázi
        Teacher::create([
            'title' => $validated['title'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'personal_number' => $validated['personal_number'],
            'user_id' => auth()->id, // Přiřadí přihlášeného uživatele k učiteli
            'created_by' => auth()->id, // Přiřadí uživatele, který učitele vytvořil
        ]);

        // Přesměrování zpět na seznam učitelů s úspěšnou hláškou
        return redirect()->route('teacher.index')->with('success', 'Učitel byl úspěšně vytvořen!');
    }
    
}
