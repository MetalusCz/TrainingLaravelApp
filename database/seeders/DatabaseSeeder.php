<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('heslo'), // Bezpečné heslo
        ]);
    
        // Vytvoření 10 učitelů a přiřazení uživatelského ID
        Teacher::factory(10)->create([
            'created_by' => $admin->id,
            'user_id' => $admin->id,
        ]);
       
    }
}
