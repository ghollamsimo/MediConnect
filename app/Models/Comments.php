<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id' , 'comment'];


    public function patient()
    {
        return $this->belongsTo(User::class);
    }
}
