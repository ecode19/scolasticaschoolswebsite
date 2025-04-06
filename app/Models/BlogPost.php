<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPost extends Model
{
    protected $fillable = ['title', 'category_id', 'description', 'featured', 'image'];

    public function category():BelongsTo {
        return $this->belongsTo(PostCategory::class);
    }
}
