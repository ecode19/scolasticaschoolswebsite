<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssessmentMethod extends Model
{
    protected $fillable = [
        'name',
        'description',
        'academic_level_id',
    ];

    public function academicLevel() {
        return $this->belongsTo(AcademicLevel::class);
    }
}
