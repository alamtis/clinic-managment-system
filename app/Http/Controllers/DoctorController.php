<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $doctors = Doctor::with('user')->paginate(10); // Assuming pagination is desired
        return view('doctors.index', compact('doctors'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        $specializations = [
            'Cardiology', 'Neurology', 'Orthopedics', 'Pediatrics', 'Dermatology',
            'Radiology', 'Oncology', 'Psychiatry', 'Gynecology', 'Urology'
        ];
        return view('doctors.create' , ['specializations' => $specializations]);
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'specialization' => 'required|string|max:255',
        ]);
        $name = explode(' ', $request->name);
        // Create User
        $user = User::create([
            'first_name' => $name[0],
            'last_name' => $name[1],
            'address' => $request->address,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Create Doctor
        Doctor::create([
            'user_id' => $user->id,
            'specialization' => $request->specialization,
        ]);

        return redirect()->route('doctors.index');
    }

    // Display the specified resource
    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    // Show the form for editing the specified resource
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $doctor->user_id
        ]);
        $name = explode(' ', $request->name);
        // Update User
        $doctor->user()->update([
            'first_name' => $name[0],
            'last_name' => $name[1],
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $doctor->user->password,
        ]);

        return redirect()->route('doctors.index');
    }

    // Remove the specified resource from storage
    public function destroy(Doctor $doctor)
    {
        $doctor->user()->delete();
        $doctor->delete();

        return redirect()->route('doctors.index');
    }
}
