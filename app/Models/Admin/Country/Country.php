<?php

namespace App\Models\Admin\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\University\University;

class Country extends Model
{
    use HasFactory;

    public function country_facts()
    {
        return $this->hasMany(CountryFact::class);
    }

    public function country_admissions()
    {
        return $this->hasMany(CountryAdmission::class);
    }

    public function country_costs()
    {
        return $this->hasMany(CountryCost::class);
    }

    public function country_scholar()
    {
        return $this->hasMany(CountryScholar::class);
    }

    public function country_visa()
    {
        return $this->hasMany(CountryVisa::class);
    }
    public function country_work_opportunity()
    {
        return $this->hasMany(CountryWorkOpportunity::class);
    }
    public function country_faqs()
    {
        return $this->hasMany(CountryFaqs::class);
    }

    public function country_university()
    {
        return $this->hasMany(University::class);
    }
}
