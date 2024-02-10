<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *     if(auth->role('mrid')){
     *         return redrict('/home');
     *     }
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'speciality'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function specialiters(): BelongsToMany
    {
        return $this->belongsToMany(Specialiter::class);
    }
    public function doctor()
    {
        return $this->HasMany(Doctor::class);
    }
    public function patient()
    {
        return $this->HasMany(Patient::class);
    }
    public function admin()
    {
        return $this->HasMany(Admin::class);
    }
}
