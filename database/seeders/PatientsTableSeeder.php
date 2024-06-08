<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $patients = [];

        // Generate a random number of patients between 10 and 20
        $patientCount = rand(10, 20);

        for ($i = 0; $i < $patientCount; $i++) {
            $patients[] = [
                'name' => $faker->name,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'birthdate' => $faker->date(),
                'ssin' => $faker->unique()->ssn,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('patients')->insert($patients);
    }
}
