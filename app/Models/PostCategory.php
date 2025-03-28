<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class PostCategory extends Model
{
    protected $fillable = ['category'];

    public function blogPosts():HasMany {
        return $this->hasMany(BlogPost::class);
    }
}
