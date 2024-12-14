<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< Updated upstream
    use HasFactory, Notifiable;
=======
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use  HasFactory, Notifiable;
>>>>>>> Stashed changes

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'verification_code',
        'is_verified',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
