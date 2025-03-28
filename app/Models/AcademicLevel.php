<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicLevel extends Model
{
    protected $fillable = [
        'name',
        'description',
        'curriculum',
        'primary_img',
        'image_2',
        'image_3',
    ];

    public function subjects() {
        return $this->hasMany(Subject::class);
    }

    public function learningApproaches() {
        return $this->hasMany(LearningApproach::class);
    }

    public function assessmentMethods() {
        return $this->hasMany(AssessmentMethod::class);
    }

    public function coCurricularActivities() {
        return $this->hasMany(CoCurricularActivity::class);
    }
}
