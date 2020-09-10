<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }
}
