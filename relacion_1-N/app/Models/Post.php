<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
    ];



    /////////// creamos la relación //////////
    /////////// tabla padre //////////////////
    //escribir 'hasMany' para autocompletado
    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    //hacia la tabla comments (hijo)
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id', 'id'); // 'foreing_key', 'primary_key(local)'
    }
}
