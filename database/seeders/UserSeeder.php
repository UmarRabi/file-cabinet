<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            'email' => "admin@clerkapplication.com",
            'password' => Hash::make("Password@1"),
            'name' => "Admin"
        ];
        $user = User::create($data);
        $user->assignRole([2]);
    }
}
