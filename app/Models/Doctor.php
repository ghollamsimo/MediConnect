<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'spicialiter_id',
        'email',
        'name',
        'password'

    ];

    public function specialite(){
        return $this->hasMany('specialiter');
    }
    }
