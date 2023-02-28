<?php

namespace App\Http\Controllers\Admin\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Country\Country;
use App\Models\Admin\Country\CountryDetails;
use App\Models\Admin\Country\CountryFact;
use App\Models\Admin\Country\CountryAdmission;
use App\Models\Admin\Country\CountryScholar;
use App\Models\Admin\Country\CountryVisa;
use App\Models\Admin\Country\CountryFaqs;
use App\Models\Admin\Country\CountryCost;
use App\Models\Admin\Country\CostQuestion;
use App\Models\Admin\Country\CountryWorkOpportunity;
use App\Models\Admin\Country\WorkDetail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class CountryDetailsController extends Controller
{
    public function index(Request $request, $id)
    {

        $data['country_id'] = $id;
        $data['fact_list'] = CountryFact::where(['country_id' => $id])->get();
        $data['admission_list'] = CountryAdmission::where(['country_id' => $id])->get();
        $data['scholar_list'] = CountryScholar::where(['country_id' => $id])->get();
        $data['visa_list'] = CountryVisa::where(['country_id' => $id])->get();
        $data['faqs_list'] = CountryFaqs::where(['country_id' => $id])->get();
        $data['cost_list'] = CountryCost::where(['country_id' => $id])->get();
        $data['work_list'] = CountryWorkOpportunity::where(['country_id' => $id])->get();
        return view('admin.country.create-details', $data);
    }


    // Adding & Updating Fast Fact Of Country
    public function addCountryFact(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fact_title.*' => 'required',
            'fact_content.*' => 'required',
        ]);
        $oldImage = CountryFact::where(['country_id' => $id])->get('fact_image');
        foreach ($validatedData['fact_title'] as $key => $value) {
            if($request->fact_attr[$key] != '')
            {
                $fact = CountryFact::find($request->fact_attr[$key]);
                $fact->country_id = $id;
                $fact->fact_title = $validatedData['fact_title'][$key];
                $fact->fact_content = $validatedData['fact_content'][$key];
                if ($request->hasFile('fact_image.'.$key)) {
                    $uploadPath = "public/uploads/facts";
                    $image = $request->file('fact_image.'.$key);
                    $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
                    $image->storeAs($uploadPath, $filename);
                    $fact->fact_image = $filename;
                }else{
                    $fact->fact_image =  $oldImage[$key]->fact_image;
                }
            }else{
                if($request->fact_attr[$key] == ''){
                $fact = new CountryFact();
                $fact->country_id = $id;
                $fact->fact_title = $validatedData['fact_title'][$key];
                $fact->fact_content = $validatedData['fact_content'][$key];
                
                if ($request->hasFile('fact_image.'.$key)) {
                    $uploadPath = "public/uploads/facts";
                    $image = $request->file('fact_image.'.$key);
                    $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
                    $image->storeAs($uploadPath, $filename);
                    $fact->fact_image = $filename;
                }
            }
            }
            $fact->save();
        }
        return back()->with('success', 'Fast Facts Has Been Added Successfully.');
    }

    // Adding & Updating Admission 
    public function addCountryAdmission(Request $request, $id)
    {
        $validatedData = $request->validate([
            'admission_para' => 'required',
            'admission_title.*' => 'required',
            'admission_image.*' => 'required|mimes:jpeg,jpg,png,gif'
        ]);

        $oldImage = CountryAdmission::where(['country_id' => $id])->get('admission_image');
        foreach ($validatedData['admission_title'] as $key => $value) {
            if($request->admission_attr[$key] != '')
            {
                $admission = CountryAdmission::find($request->admission_attr[$key]);
                $admission->country_id = $id;
                $admission->admission_para = $validatedData['admission_para'];
                $admission->admission_title = $validatedData['admission_title'][$key];
                if ($request->hasFile('admission_image.'.$key)) {
                    $uploadPath = "public/uploads/admission";
                    $image = $request->file('admission_image.'.$key);
                    $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
                    $image->storeAs($uploadPath, $filename);
                    $admission->admission_image = $filename;
                }else{
                    $admission->admission_image =  $oldImage[$key]->admission_image;
                }
            }else{
                if($request->admission_attr[$key] == ''){
                $admission = new CountryAdmission();
                $admission->country_id = $id;
                $admission->admission_title = $validatedData['admission_title'][$key];
                $admission->admission_para = $validatedData['admission_para'];
                if ($request->hasFile('admission_image.'.$key)) {
                    $uploadPath = "public/uploads/admission";
                    $image = $request->file('admission_image.'.$key);
                    $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
                    $image->storeAs($uploadPath, $filename);
                    $admission->admission_image = $filename;
                }
            }
            }
            $admission->save();
        }
        return back()->with('success', 'Admission Has Been Added Successfully.');
    }


// Adding & Updating Scholarships
    public function addCountryScholarship(Request $request, $id)
    {
        $image_required='';
        if($request->scholar_id != '')
        {
            $image_required = '';
        }else{
            $image_required = 'required|mimes:png,jpg,jpeg';
        }
        $request->validate([
            'scholar_title' => 'required',
            'scholar_desc' => 'required',
            'scholar_image' => $image_required
        ]);
        
        if($request->scholar_id != '')
        {
            $scholar = CountryScholar::find($request->scholar_id);
            $scholar->scholar_title = $request->scholar_title;
            $scholar->scholar_desc = $request->scholar_desc;
            if ($request->hasFile('scholar_image')) {
                $uploadPath = "public/uploads/scholar";
                $image = $request->file('scholar_image');
                $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
                $image->storeAs($uploadPath, $filename);
                $scholar->scholar_image = $filename;
            }else{
                $scholar->scholar_image = $request->temp_scholar_image; 
            }
        }else{
            $scholar = new CountryScholar();
            $scholar->country_id = $id;
            $scholar->scholar_title = $request->scholar_title;
            $scholar->scholar_desc = $request->scholar_desc;
            if ($request->hasFile('scholar_image')) {
                $uploadPath = "public/uploads/scholar";
                $image = $request->file('scholar_image');
                $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
                $image->storeAs($uploadPath, $filename);
                $scholar->scholar_image = $filename;
            }
        }
        $scholar->save();
        return back()->with('success', 'Scholarship Has Been Added Successfully.');
    }

    // Adding & Updating Visa
    public function addCountryVisa(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'visa_title.*' => 'required',
            'visa_cost.*' => 'required',
            'visa_type.*' => 'required',
            'visa_rating.*' => 'required',
            'visa_desc.*' => 'required',
        ]);
        foreach($validatedData['visa_title'] as $key => $visa)
        {
            if($request->visa_id[$key] != '')
            {
                $visa = CountryVisa::find($request->visa_id[$key]);
                $visa->visa_title = $validatedData['visa_title'][$key];
                $visa->visa_cost = $validatedData['visa_cost'][$key];
                $visa->visa_type = $validatedData['visa_type'][$key];
                $visa->visa_rating = $validatedData['visa_rating'][$key];
                $visa->visa_short_desc = $validatedData['visa_desc'][$key];
            }else{
                $visa = new CountryVisa();
                $visa->country_id = $id;
                $visa->visa_title = $validatedData['visa_title'][$key];
                $visa->visa_cost = $validatedData['visa_cost'][$key];
                $visa->visa_type = $validatedData['visa_type'][$key];
                $visa->visa_rating = $validatedData['visa_rating'][$key];
                $visa->visa_short_desc = $validatedData['visa_desc'][$key]; 
            }
            $visa->save();        
        }
        return back()->with('success', 'Visa Has Been Added Successfully.');
    }

    // Adding & Updating Faqs
    public function addCountryFaqs(Request $request, $id)
    {
        $validatedData = $request->validate([
            'faqs_title.*' => 'required',
            'faqs_desc.*' => 'required',
        ]);
        foreach($validatedData['faqs_title'] as $key => $visa)
        {
            if($request->faqs_id[$key] != '')
            {
                $faqs = CountryFaqs::find($request->faqs_id[$key]);
                $faqs->faqs_title = $validatedData['faqs_title'][$key];
                $faqs->faqs_desc = $validatedData['faqs_desc'][$key];
            }else{
                $faqs = new CountryFaqs();
                $faqs->country_id = $id;
                $faqs->faqs_title = $validatedData['faqs_title'][$key];
                $faqs->faqs_desc = $validatedData['faqs_desc'][$key];
            }
            $faqs->save();        
        }
        return back()->with('success', 'Faqs Has Been Added Successfully.');
    }



    // Adding && Updating Cost Of Living
    public function addCountryCostOfLiving(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cost_title.*' => 'required',
            'cost_desc.*' => 'required',
            'cost_ques.*.*' => 'required',
            'cost_ans.*.*' => 'required',
        ]);
        foreach ($validatedData['cost_title'] as $key => $title) {
            if ($request->cost_id[$key] != '') {
                $cost = CountryCost::find($request->cost_id[$key]);
                $cost->cost_title = $title;
                $cost->cost_desc = $validatedData['cost_desc'][$key];
                $cost->save();
                foreach ($validatedData['cost_ques'][$key] as $qKey => $question) {
                    if ($request->quest_id[$key][$qKey] != '') {
                        $costQA = CostQuestion::find($request->quest_id[$key][$qKey]);
                        $costQA->question = $question;
                        $costQA->answer = $validatedData['cost_ans'][$key][$qKey];
                        $costQA->save();
                    } else {
                        $costQA = new CostQuestion;
                        $costQA->cost_id = $cost->id;
                        $costQA->question = $question;
                        $costQA->answer = $validatedData['cost_ans'][$key][$qKey];
                        $costQA->save();
                    }
                }
            } else {

                $cost = new CountryCost;
                $cost->country_id = $id;
                $cost->cost_title = $title;
                $cost->cost_desc = $validatedData['cost_desc'][$key];
                $cost->save();
        
                foreach ($validatedData['cost_ques'][$key] as $qKey => $question) {
                    $costQA = new CostQuestion;
                    $costQA->cost_id = $cost->id;
                    $costQA->question = $question;
                    $costQA->answer = $validatedData['cost_ans'][$key][$qKey];
                    $costQA->save();
                }
            }
        }
        return back()->with('success', 'Cost Has Been Added Successfully.');
    }


    // Adding & Updating Work Opportunity
    public function addCountryWorkOpportunity(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'part_title' => 'required',
            'part_content' => 'required',
            'study_title' => 'required',
            'study_content' => 'required',
            'study_title2' => 'required',
            'study_content2' => 'required',
            'work_title.*' => 'required',
            'work_image.*' => 'required',
        ]);

        if($request->work_id != '')
        {
            $work = CountryWorkOpportunity::find($request->work_id);
            $work->country_id = $id;
            $work->title = $validatedData['title'];
            $work->content = $validatedData['content'];
            $work->part_title = $validatedData['part_title'];
            $work->part_content = $validatedData['part_content'];
            $work->study_title = $validatedData['study_title'];
            $work->study_content = $validatedData['study_content'];
            $work->study_title2 = $validatedData['study_title2'];
            $work->study_content2 = $validatedData['study_content2'];
            $work->save();
            foreach($validatedData['work_title'] as $key => $title)
            {
                if($request->work_detail_id[$key] != '')
                {
                    $oldImage = WorkDetail::where(['work_id' => $request->work_id])->get('work_image');
                    $work_details = WorkDetail::find($request->work_detail_id[$key]);
                    $work_details->work_title = $title;
                    $work_details->work_id = $work->id;
                    if ($request->hasFile('work_image.'.$key)) {
                        $uploadPath = "public/uploads/works";
                        $image = $request->file('work_image.'.$key);
                        $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
                        $image->storeAs($uploadPath, $filename);
                        $work_details->work_image = $filename;
                    }else{
                        $work_details->work_image = $oldImage[$key]->work_image;
                    }
                }else{
                    $work_details = new WorkDetail();
                    $work_details->work_title = $title;
                    $work_details->work_id = $work->id;
                    if ($request->hasFile('work_image.'.$key)) {
                        $uploadPath = "public/uploads/works";
                        $image = $request->file('work_image.'.$key);
                        $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
                        $image->storeAs($uploadPath, $filename);
                        $work_details->work_image = $filename;
                    }
                    
                }
                $work_details->save();  
            }
        }else{
            $work = new CountryWorkOpportunity();
            $work->country_id = $id;
            $work->title = $validatedData['title'];
            $work->content = $validatedData['content'];
            $work->part_title = $validatedData['part_title'];
            $work->part_content = $validatedData['part_content'];
            $work->study_title = $validatedData['study_title'];
            $work->study_content = $validatedData['study_content'];
            $work->save();
            foreach($validatedData['work_title'] as $key => $title)
            {
                $work_details = new WorkDetail();
                $work_details->work_title = $title;
                $work_details->work_id = $work->id;
                if ($request->hasFile('work_image.'.$key)) {
                    $uploadPath = "public/uploads/works";
                    $image = $request->file('work_image.'.$key);
                    $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
                    $image->storeAs($uploadPath, $filename);
                    $work_details->work_image = $filename;
                }
                $work_details->save(); 
            }
        }
        return back()->with('success', 'Work Opportunity Has Been Save Successfully.');
    }



}
