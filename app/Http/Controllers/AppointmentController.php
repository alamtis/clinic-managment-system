<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Schedule appointment
    }

    public function update(Request $request, Appointment $appointment)
    {
        // Update appointment details
    }

    public function destroy(Appointment $appointment)
    {
        // Cancel appointment
    }
}
