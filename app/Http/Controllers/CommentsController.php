<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $doctor_id)
    {
        $id_user = Auth::user()->id;
        $patient = Patient::where('user_id', $id_user)->first();

        if ($patient) {
            $validation = $request->validate([
                'comments' => 'required',
            ]);
            $comment = Comments::create([
                'patient_id' => $patient->id,
                'doctor_id' => $doctor_id,
                'comments' => $request->comments,
            ]);
        }
        return redirect()->route('comment', ['doctor_id' => $doctor_id]);
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
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
