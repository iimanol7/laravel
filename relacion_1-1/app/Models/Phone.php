<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'user_id'];


    /////////// creamos la relación //////////
    /////////// tabla hijo //////////////////
    /**
     * Get the user that owns the Phone
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id'); // 'foreign_key(local)' , 'other_key' 
    }
}
