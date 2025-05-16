<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'post_id',
    ];

    /////////// creamos la relación //////////
    /////////// tabla hijo //////////////////
    //escribir 'belongsTo' para autocompletado
    /**
     * Get the user that owns the Comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id', 'id'); // 'foreign_key(local)' , 'primary_key'
    }
}
