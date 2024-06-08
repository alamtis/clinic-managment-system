<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DoctorsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $specializations = [
            'Cardiology', 'Neurology', 'Orthopedics', 'Pediatrics', 'Dermatology',
            'Radiology', 'Oncology', 'Psychiatry', 'Gynecology', 'Urology'
        ];

        $users = DB::table('users')->get();

        foreach ($users as $user) {
            DB::table('doctors')->insert([
                'user_id' => $user->id,
                'specialization' => $faker->randomElement($specializations),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
