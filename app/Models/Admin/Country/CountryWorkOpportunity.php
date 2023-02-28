<?php

namespace App\Models\Admin\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryWorkOpportunity extends Model
{
    use HasFactory;
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
