<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
        $superAdmin->assignRole('admin');

        $teacher = User::create([
            'name' => 'Marina Ivanovna',
            'email' => 'teacher@example.com',
            'password' => Hash::make('teacher1234')
        ]);
        $teacher->assignRole('teacher');

        $student = User::create([
            'name' => 'Sidorov Anton',
            'email' => 'student@example.com',
            'password' => Hash::make('student1234')
        ]);
        $student->assignRole('student');
    }
}
