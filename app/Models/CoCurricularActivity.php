<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoCurricularActivity extends Model
{
    protected $fillable = [
        'name',
        'description',
        'academic_level_id',
        'primary_img',
    ];

    public function academicLevel() {
        return $this->belongsTo(AcademicLevel::class);
    }
}
