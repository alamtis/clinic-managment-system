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
        $consultationTime = fake()->dateTimeBetween('+1 week', '12 weeks');
        return [
            'date' => fake()->date('d/m/y'),
            'start_at' => $consultationTime,
            'end_at' => Carbon::parse($consultationTime)->addHour(),
            'purpose' => fake()->sentence(),
            'patient_id' => Patient::factory(),
            'doctor_id' => Doctor::factory()
        ];
    }
}
