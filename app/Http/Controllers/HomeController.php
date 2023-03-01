<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Country\Country;
use App\Models\Admin\Course\Course;
use App\Models\Admin\University\University;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    


    public function countryDetails(Request $request, $slug)
    {
        $data['country'] = Country::with('country_facts', 'country_admissions', 'country_costs', 'country_scholar', 'country_visa', 'country_work_opportunity', 'country_faqs', 'country_university.unversity_courses', 'country_university.unversity_colleges', 'country_university.unversity_programs')->where(['country_slug' => $slug])->first();
        return view('country', $data);
    }


    public function parentCountryDetails(Request $request, $parentSlug, $slug)
    {
        $data['country'] = Country::with('country_facts', 'country_admissions', 'country_costs', 'country_scholar', 'country_visa', 'country_work_opportunity', 'country_faqs', 'country_university.unversity_courses', 'country_university.unversity_colleges', 'country_university.unversity_programs')->where(['country_slug' => $slug])->first();
        return view('country', $data);
    }

    public function downloadBrochure(Request $request)
    {
        $filePath = $request->input('file_path');
        $fileName = basename($filePath);
    
        $headers = [
            'Content-Type' => 'application/octet-stream',
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => "attachment; filename={$fileName}",
            'Content-Length' => filesize($filePath),
        ];
    
        return response()->download($filePath, $fileName, $headers);

    }


    public function universityDetails(Request $request, $country_slug, $slug)
    {
        $data['university_details'] = University::with('unversity_courses', 'unversity_colleges', 'unversity_programs')->where(['uni_slug' => $slug])->first();
        $data['course_list'] = Course::all();
        return view('details', $data);
    }


    public function universityList(Request $request)
    {
        $data['university_list'] = University::with('unversity_courses', 'unversity_colleges', 'unversity_programs')->get();
        return view('listing', $data);
    }

}
