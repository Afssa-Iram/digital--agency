<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'client',
        'image',
        'description',
        'content',
        'link',
        'is_featured',
    ];
}

