<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@genau.com',
            'password' => Hash::make('password')
        ]);
        $admin->assignRole('admin');

        $siswa = User::create([
            'name' => 'Siswa Example',
            'email' => 'siswa@genau.com',
            'password' => Hash::make('password')
        ]);
        $siswa->assignRole('siswa');
    }
}
