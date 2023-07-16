<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Manager',
                'username' => 'manager',
                'password' => Hash::make('password'),
                'role' => 'manager'
            ],
            [
                'name' => 'Web Developer',
                'username' => 'developer',
                'password' => Hash::make('password'),
                'role' => 'web_developer'
            ],
            [
                'name' => 'Web Designer',
                'username' => 'designer',
                'password' => Hash::make('password'),
                'role' => 'web_designer'
            ]
        ];
        foreach ($users as $user) {
            $user['create_date'] = now();
            User::create($user);
        }
    }
}
