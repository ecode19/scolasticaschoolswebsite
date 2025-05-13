<?php

namespace App\Models\Staff;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staff";

    protected $primaryKey = "id";

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'bio',
        'profile_picture',
    ];
}
