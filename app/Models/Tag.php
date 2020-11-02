<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug', 
        'description'
    ];

    /**
     * Get the posts for the tags.
     */
    public function posts()
    {
        return $this->belongToMany('App\Models\Post');
    }
}
