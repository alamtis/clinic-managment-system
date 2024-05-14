<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Patient;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::with(['patient', 'doctor'])->orderBy( 'date', 'asc')->paginate(5);
//        dd($consultations);
        return view('consultations.index', ['consultations' => $consultations]);
    }

    public function create()
    {
        $doctors = Doctor::with('user')->get();
        $patients = Patient::get();
        return view('consultations.create',
            [
                'doctors' => $doctors,
                'patients' => $patients
            ]
        );
    }

    public function store(Request $request)
    {

        $validated =$request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'object' => 'required',
            'date' => 'required|date'
        ]);

        Consultation::create([
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'object' => $request->object,
            'date' => $request->date
        ]);

        return redirect()->route('consultations.index');
    }

    public function edit(Consultation $consultation)
    {
        return view('consultations.edit', ['consultation' => $consultation]);
    }

    public function update(Request $request, Consultation $consultation)
    {
        $request->validate([
            'object' => 'required',
            'date' => 'required|date'
        ]);
        $consultation->update([
            'object' => $request->object,
            'date' => $request->date
        ]);
        return redirect()->route('consultations.index');
    }

    public function destroy(Consultation $consultation)
    {
        $consultation->delete();
        return redirect()->route('consultations.index');
    }
}
