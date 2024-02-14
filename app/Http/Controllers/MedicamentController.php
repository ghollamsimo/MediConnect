<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicament = Medicament::all();
        return view('pages.medicament' , compact('medicament'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'archive' => 'required'
        ]);

      $medic = Medicament::create([
            'name' => $data['name'],
          'price' => $data['price'],
          'archive' => $data['archive']
      ]);

        return redirect()->route('Medicament')->with('success', 'Recits Created  successfully!');
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
    public function show(Medicament $medicament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('edit_medicament');
    }

    public function update(Request $request,Medicament $id)
    {
        $data = $request->validate([
            'titre' => 'required',
            'prix' => 'required',
            'etat' => 'required'
        ]);

         $id->update([
            'name' => $data['titre'],
            'price' => $data['prix'],
            'archive' => $data['etat']
        ]);

        return redirect()->route('Medicament')->with('success', 'Medicament updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $medicament = Medicament::findOrFail($id);
        $medicament->delete();

        return redirect()->route('Medicament')->with('success', 'Medicament Deleted successfully!');
    }
}
