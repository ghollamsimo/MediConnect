<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Speciality;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speciality = Speciality::all();

        return view('/' , compact('speciality'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'user_id' => 'required',
            'speciality_id' => 'required',
            'message' => 'required',
            'doctor' => 'required',
            'date' => ['required']
        ]);

       {

           Appointment::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'user_id' => $data['user_id'],
                'speciality_id' => $data['speciality_id'],
                'message' => $data['message'],
                'doctor_id' => $data['doctor'],
                'created_at' => $data['date']
            ]);
        }

        return redirect()->route('creer')->with('success', 'Appointments created successfully!');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
