<?php

namespace App\Models\NewsEvent;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    protected $table = 'news_events';

    protected $fillable = [
        'title',
        'type',
        'location',
        'content',
        'image',
        'date',
    ];
}
