<?php

namespace App\Models\Admin\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityColleges extends Model
{
    use HasFactory;
    public function unversity()
    {
        return $this->belongsTo(University::class);
    }

    public function colleges_points()
    {
        return $this->hasMany(UniversityCollegesPoint::class);
    }
    
}
