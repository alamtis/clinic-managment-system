<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ConsultationsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $patients = DB::table('patients')->pluck('id')->toArray();
        $doctors = DB::table('doctors')->pluck('id')->toArray();

        $consultations = [];

        // Generate a random number of consultations between 10 and 20
        $consultationCount = rand(10, 20);

        for ($i = 0; $i < $consultationCount; $i++) {
            $consultations[] = [
                'date' => $faker->dateTimeBetween('now', '+3 months')->format('Y-m-d'),
                'object' => $faker->sentence(),
                'patient_id' => $faker->randomElement($patients),
                'doctor_id' => $faker->randomElement($doctors),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('consultations')->insert($consultations);
    }
}
