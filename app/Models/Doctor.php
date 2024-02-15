<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'speciality_id',
        'user_id',
    ];

    public function specialite(){
        return $this->hasOne('specialiter');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
