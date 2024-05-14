<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::paginate(5);
        return view('patients.index', ['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'birthdate' => 'required|date',
            'ssin' => 'required',
            'email' => 'required|email|unique:patients',
        ]);
        Patient::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate,
            'ssin' => $request->ssin,
            'email' => $request->email
        ]);

        return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit', ['patient' => $patient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'birthdate' => 'required|date',
            'ssin' => 'required',
            'email' => 'required|email|unique:patients,email,'.$patient->id,
        ]);
        $patient->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate,
            'ssin' => $request->ssin,
            'email' => $request->email
        ]);
        return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index');
    }
}
