<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Consultation>
 */
class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->dateTimeBetween('now', '+1 year'),
            'object' => fake()->sentence(),
            'patient_id' => Patient::factory(),
            'doctor_id' => Doctor::factory()
        ];
    }
}
