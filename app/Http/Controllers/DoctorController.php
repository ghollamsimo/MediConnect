<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view("dashboard", compact($doctors));
    }

    public function showalldata(){
        $specialities = Speciality::all();

        $doctors = Doctor::join('users', 'doctors.user_id', '=', 'users.id')
            ->join('specialities', 'doctors.speciality_id', '=', 'specialities.id')
            ->select('doctors.*', 'users.name as user_name', 'specialities.name as speciality_name')
            ->get();

        $patients = Patient::all();

        return view('welcome' , compact('doctors' , 'specialities' , 'patients'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(""); // create doctor form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faildsinput = $request->validate([
            "name" => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
