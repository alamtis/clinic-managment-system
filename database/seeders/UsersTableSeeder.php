<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $this->createUsers('doctor', 10, 20, $faker);
        $this->createUsers('secretary', 10, 20, $faker);
        $this->createUsers('patient', 10, 20, $faker);
    }

    private function createUsers($type, $min, $max, $faker)
    {
        $users = [];
        $userCount = rand($min, $max);

        for ($i = 0; $i < $userCount; $i++) {
            $users[] = [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($users);
    }
}
