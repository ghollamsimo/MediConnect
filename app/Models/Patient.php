<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patient(){
        return $this->hasMany(Appointment::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
