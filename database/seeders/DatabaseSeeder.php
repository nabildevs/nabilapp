<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username'  => '00',
            'password'  => 'hasbi_260600',
            'name'      => 'Hasbi Nabil',
            'email'     => 'hasbinabil.work@gmail.com',
            // 'role_id'   => 1
        ]);

        User::create([
            'username'  => 'zarayaa',
            'password'  => 'aya123',
            'name'      => 'Zahra Amelia',
            'email'     => 'zahramelia511@gmail.com',
            // 'role_id'   => 2
        ]);
    }
}
