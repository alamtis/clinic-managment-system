<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        return view('consultations');
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, Consultation $consultation)
    {

    }

    public function destroy(Consultation $consultation)
    {

    }
}
