<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | 1. SEED ROLES
        |--------------------------------------------------------------------------
        */
        $adminRole = Role::create([
            'name' => 'Administrator',
            'slug' => 'admin'
        ]);

        $studentRole = Role::create([
            'name' => 'User',
            'slug' => 'user'
        ]);

        /*
        |--------------------------------------------------------------------------
        | 2. SEED USERS
        |--------------------------------------------------------------------------
        */
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@vidici.com',
            'password' => Hash::make('password123'),
        ]);

        $student = User::create([
            'name' => 'Budi Siswa',
            'email' => 'user@vidici.com',
            'password' => Hash::make('password123'),
        ]);


        /*
        |--------------------------------------------------------------------------
        | 3. ASSIGN ROLE KE USER
        |--------------------------------------------------------------------------
        */

        // kalau relasi many-to-many (role_user)
        $admin->roles()->attach($adminRole->id);
        $student->roles()->attach($studentRole->id);

        // kalau one-to-many (user punya role_id)
        // $admin->update(['role_id' => $adminRole->id]);
        // $student->update(['role_id' => $studentRole->id]);
        // $dosen->update(['role_id' => $dosenRole->id]);
    }
}