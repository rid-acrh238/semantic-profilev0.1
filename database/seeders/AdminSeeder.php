<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrator',
                'nim' => null,
                'password' => Hash::make(
                    env('ADMIN_INITIAL_PASSWORD', 'ChangeMe-123!')
                ),
                'role' => User::ROLE_ADMIN,
            ]
        );
    }
}
