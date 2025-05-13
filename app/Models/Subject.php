<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'description',
        'academic_level_id',
        'category_id',
        'status',
        'primary_img',
    ];

    public function academicLevel() {
        return $this->belongsTo(AcademicLevel::class);
    }

    public function category() {
        return $this->belongsTo(SubjectCategory::class);
    }
}
