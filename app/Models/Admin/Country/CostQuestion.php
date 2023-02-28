<?php

namespace App\Models\Admin\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostQuestion extends Model
{
    use HasFactory;

    public function country_cost()
    {
        return $this->belongsTo(CountryCost::class);
    }
}
