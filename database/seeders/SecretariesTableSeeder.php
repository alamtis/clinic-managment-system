<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SecretariesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $users = DB::table('users')->get();
        $doctorIds = DB::table('doctors')->pluck('id')->toArray();

        foreach ($users as $user) {
            DB::table('secretaries')->insert([
                'user_id' => $user->id,
                'doctor_id' => $faker->randomElement($doctorIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
