<?php

namespace App\Models\Admin\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryCost extends Model
{
    use HasFactory;
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cost_question()
    {
        return $this->hasMany(CostQuestion::class);
    }
}
