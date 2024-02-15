<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'user_id', 'speciality_id', 'message' , 'doctor_id'];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}
