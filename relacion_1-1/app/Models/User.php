<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /////////// creamos la relación //////////
    /////////// tabla padre //////////////////
    //escribir 'hasOne' para autocompletado
    /**
     * Get the phone associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

     //Hacia la tabla hijo (phone)
    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class, 'user_id', 'id'); // 'foreing_key', 'primary_key(local)'
    }
}
