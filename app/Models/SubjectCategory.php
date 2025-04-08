<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectCategory extends Model
{
    protected $fillable = ['category'];

    public function subjects() {
        return $this->hasMany(Subject::class);
    }
}
