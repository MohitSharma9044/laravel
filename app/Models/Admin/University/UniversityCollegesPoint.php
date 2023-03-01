<?php

namespace App\Models\Admin\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCollegesPoint extends Model
{
    use HasFactory;

    public function colleges()
    {
        return $this->belongsTo(UniversityColleges::class);
    }
}
