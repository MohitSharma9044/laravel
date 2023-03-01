<?php

namespace App\Models\Admin\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCourse extends Model
{
    use HasFactory;

    public function unversity()
    {
        return $this->belongsTo(University::class);
    }

    public function courses_points()
    {
        return $this->hasMany(UniversityCoursesPoint::class);
    }
}
