<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        // 2 admins (emails fixes pour accès facile)
        $admins = [
            ['name' => 'Super Admin', 'email' => 'Superadmin@exemple.com'],
            ['name' => 'Second Admin', 'email' => 'Superadmin2@exemple.com'],
        ];

        foreach ($admins as $admin) {
            User::create([
                // 'id' => (string) Str::uuid(),
                'name' => $admin['name'],
                'email' => $admin['email'],
                'role' => '1',
                'password' => Hash::make('password123'),
                'phone' => $faker->phoneNumber,
                'photo' => 'default.png',
            ]);
        }

        // 10 customers générés customer1@exemple.com
        for ($i = 1; $i <= 3; $i++) {
            User::create([
                // 'id' => (string) Str::uuid(),
                'name' => $faker->name,
                'email' => 'admin' . $i . '@exemple.com',
                'role' => '2',
                'password' => Hash::make('password123'),
                'phone' => $faker->phoneNumber,
                'photo' => 'default.png',
            ]);
        }
    }
}
