<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['name', 'category', 'description', 'primary_img'];
}
