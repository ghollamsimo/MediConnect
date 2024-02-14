<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Medicament;
use App\Models\Patient;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialitiesCount = Speciality::count();
        $doctorcount = Doctor::count();
        $medicamentcount = Medicament::count();
        $patientcount = Patient::count();
        $medicament = Medicament::all();
        return view('dashboard', compact('specialitiesCount', 'doctorcount', 'medicamentcount' , 'patientcount' , 'medicament'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        $medic = Medicament::create([
            'name' => $data['name'],
        ]);

        return redirect()->route('Speciality')->with('success', 'Recits Created  successfully!');
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
    public function show(Speciality $speciality)
    {
        $Speciality = Speciality::all();
        return view('speciality' , ['Speciality' => $Speciality]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speciality $speciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speciality $speciality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {
        //
    }
}
