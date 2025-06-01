<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Super admin',
            'username' => 'superadmin',
            'password' => Hash::make('password'),
            'role' => 'Super admin',
            'type_user' => 1,
            'company' => 'GreenTrack'
        ]);
    }
}
