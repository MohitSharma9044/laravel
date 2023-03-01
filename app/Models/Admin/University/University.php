<?php

namespace App\Models\Admin\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function unversity_courses()
    {
        return $this->hasMany(UniversityCourse::class);
    }
    public function unversity_colleges()
    {
        return $this->hasMany(UniversityCourse::class);
    }
    public function unversity_programs()
    {
        return $this->hasMany(UniversityCourse::class);
    }
}
