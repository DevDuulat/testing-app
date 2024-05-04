<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'student']);

        $superAdmin = Role::findByName('admin');

        $superAdmin->givePermissionTo([
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-article',
            'edit-article',
            'delete-article',
            'create-lecture',
            'edit-lecture',
            'delete-lecture',
            'create-course',
            'edit-course',
            'delete-course',
            'create-test',
            'edit-test',
            'delete-test',
        ]);

        $teacher = Role::findByName('teacher');

        $teacher->givePermissionTo([
            'create-article',
            'edit-article',
            'delete-article',
            'create-lecture',
            'edit-lecture',
            'delete-lecture',
            'create-course',
            'edit-course',
            'delete-course',
            'create-test',
            'edit-test',
            'delete-test'
        ]);

        $student = Role::findByName('student');

    }
}
