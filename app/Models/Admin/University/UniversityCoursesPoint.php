<?php

namespace App\Models\Admin\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCoursesPoint extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsTo(UniversityCourse::class);
    }
}
