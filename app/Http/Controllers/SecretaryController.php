<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Secretary;
use App\Models\User;
use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secretaries = Secretary::with('user')->paginate(5);
        return view('secretaries.index', ['secretaries' => $secretaries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::with('user')->get();
        return view('secretaries.create', ['doctors' => $doctors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'doctor_id' => 'required'
        ]);

        $user = User::create([
            'first_name' => explode(' ', $request->name)[0],
            'last_name' => explode(' ', $request->name)[1],
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender
        ]);

        Secretary::create([
            'user_id' => $user->id,
            'doctor_id' => $request->doctor_id
        ]);

        return redirect()->route('secretaries.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secretary $secretary)
    {
        return view('secretaries.edit', ['secretary' => $secretary]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Secretary $secretary)
    {
        $secretary->delete();
        return redirect()->route('secretaries.index');
    }
}
