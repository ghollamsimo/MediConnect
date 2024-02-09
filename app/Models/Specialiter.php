<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialiter extends Model
{
    protected $fillable = [
        'spicaliter'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    use HasFactory;
}
