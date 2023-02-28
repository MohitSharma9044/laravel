<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Country\Country;

class HomeController extends Controller
{
    


    public function countryDetails(Request $request, $slug)
    {
        $data['country'] = Country::with('country_facts', 'country_admissions', 'country_costs', 'country_scholar', 'country_visa', 'country_work_opportunity', 'country_faqs', 'country_university')->where(['country_slug' => $slug])->first();
        return view('country', $data);
    }


    public function parentCountryDetails(Request $request, $parentSlug, $slug)
    {
        return view('country');
    }

}
