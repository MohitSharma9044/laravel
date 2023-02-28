<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Country\Country;
use App\Models\Admin\Course\Course;
use App\Models\Admin\University\University;
use App\Models\Admin\University\UniversityColleges;
use App\Models\Admin\University\UniversityCollegesPoint;
use App\Models\Admin\University\UniversityCourse;
use App\Models\Admin\University\UniversityCoursesPoint;
use App\Models\Admin\University\UniversityProgram;
use Illuminate\Support\Facades\Storage;

class UniversityController extends Controller
{
    public function index()
    {
        $data['country_list'] = Country::all();
        $data['course_list'] = Course::all();
        return view('admin.university.university', $data);
    }

    public function createUnivercity(Request $request)
    {
        $request->validate([
            'country_id' => 'required',
            'uni_name' => 'required|unique:universities,uni_name',
            'uni_logo' => 'required',
            'uni_banner' => 'required',
            'uni_mobiles' => 'required',
            'uni_emails' => 'required',
            'uni_description' => 'required',
            'uni_program_title' => 'required',
            'uni_course_heading' => 'required',
            'uni_program_points.*' => 'required',
            'uni_course_title.*' => 'required',
            'uni_course.*.*' => 'required',
        ]);
        $university = new University;
        $university->country_id = $request->country_id;
        $university->uni_name = $request->uni_name;
        $university->uni_slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->uni_name)));
        $university->uni_mobiles = $request->uni_mobiles;
        $university->uni_emails = $request->uni_emails;
        $university->uni_description = $request->uni_description;
        $university->uni_program_title = $request->uni_program_title;
        $university->uni_course_heading = $request->uni_course_heading;
        $university->uni_college_heading = $request->uni_college_heading;
        if($request->hasFile('uni_logo'))
        {
            $uploadPath = "public/uploads/university/";
            $image = $request->file("uni_logo");
            $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
            $image->storeAs($uploadPath, $filename);
            $university->uni_logo = $filename;
        }

        if($request->hasFile('uni_banner'))
        {
            $uploadPath = "public/uploads/university/";
            $image = $request->file("uni_banner");
            $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
            $image->storeAs($uploadPath, $filename);
            $university->uni_banner = $filename;
        }

        if($request->hasFile('uni_brochure'))
        {
            $uploadPath = "public/uploads/university/";
            $image = $request->file("uni_brochure");
            $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
            $image->storeAs($uploadPath, $filename);
            $university->uni_brochure = $filename;
        }
        $university->save();
        if(count($request->uni_program_points) > 0)
        {
            foreach($request->uni_program_points as $key => $points)
            {
                if($request->uni_program_points[$key] != '')
                {
                    $program = new UniversityProgram;
                    $program->university_id = $university->id;
                    $program->uni_program_points = $points;
                    $program->save();
                }
            }
        }

        if(count($request->uni_course_title) > 0)
        {
            foreach($request->uni_course_title as $key => $title)
            {
                $course = new UniversityCourse;
                $course->university_id = $university->id;
                $course->uni_course_title = $title;
                $course->save();
                foreach($request->uni_course[$key] as $ckey => $cpoints)
                {
                    $course_points = new UniversityCoursesPoint;
                    $course_points->uni_course_id = $course->id;
                    $course_points->uni_course = $cpoints;
                    $course_points->save();

                }
            }
        }

        if(count($request->uni_college_city) > 0)
        {
            foreach($request->uni_college_city as $key => $city)
            {
                if($request->uni_college_city[$key] != '')
                {
                    $college = new UniversityColleges;
                    $college->university_id = $university->id;
                    $college->uni_college_city = $city;
                    $college->save();
                    foreach($request->uni_college_points[$key] as $clkey => $clpoints)
                    {
                        if($request->uni_college_points[$key][$clkey] != '')
                        {
                            $college_points = new UniversityCollegesPoint;
                            $college_points->uni_college_id = $college->id;
                            $college_points->uni_college_points = $clpoints;
                            $college_points->save();
                        }

                    }
                }
            }
        }

        return back()->with('success', 'University Has Been Inserted Successfully.');
    }



    public function universityList()
    {
        $data['university_list']=University::all();
        return view('admin.university.university_list', $data);
    }

    public function enabledUniversity(Request $request, $id)
    {
        $university = University::find($id);
        $university->status = 'Enabled';
        $updated = $university->save();
        if($updated)
        {
            return back()->with('success', 'Status Has Been Update Successfully.');
        }else{
            return back()->with('error', 'Updation Failed');
        }
    }

    public function disabledUniversity(Request $request, $id)
    {
        $university = University::find($id);
        $university->status = 'Disabled';
        $updated = $university->save();
        if($updated)
        {
            return back()->with('success', 'Status Has Been Update Successfully.');
        }else{
            return back()->with('error', 'Updation Failed');
        }
    }

    public function editUniversity(Request $request, $id)
    {
        $data['country_list'] = Country::all();
        $data['course_list'] = Course::all();
        $data['university_list'] = University::find($id)->first();
        $data['university_id'] = $id;
        $data['colleges_list'] = UniversityColleges::where(['university_id' => $id])->get();
        $data['program_list'] = UniversityProgram::where(['university_id' => $id])->get();
        $data['courses_list'] = UniversityCourse::where(['university_id' => $id])->get();
        $data['college_list'] = UniversityColleges::where(['university_id' => $id])->get();
        return view('admin.university.edit_university', $data);
    }



    public function updateUniversity(Request $request, $id)
    {
        $request->validate([
            'country_id' => 'required',
            'uni_name' => 'required',
            'uni_mobiles' => 'required',
            'uni_emails' => 'required',
            'uni_description' => 'required',
            'uni_program_title' => 'required',
            'uni_course_heading' => 'required',
            'uni_program_points.*' => 'required',
            'uni_course_title.*' => 'required',
            'uni_course.*.*' => 'required',
        ]);
        $university = University::find($id);
        $university->country_id = $request->country_id;
        $university->uni_name = $request->uni_name;
        $university->uni_slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->uni_name)));
        $university->uni_mobiles = $request->uni_mobiles;
        $university->uni_emails = $request->uni_emails;
        $university->uni_description = $request->uni_description;
        $university->uni_program_title = $request->uni_program_title;
        $university->uni_course_heading = $request->uni_course_heading;
        $university->uni_college_heading = $request->uni_college_heading;
        if($request->hasFile('uni_logo'))
        {
            if (Storage::exists('public/uploads/university/'.$university->uni_logo)) {
                Storage::delete('public/uploads/university/'.$university->uni_logo);
            }
            $uploadPath = "public/uploads/university/";
            $image = $request->file("uni_logo");
            $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
            $image->storeAs($uploadPath, $filename);
            $university->uni_logo = $filename;
        }else{
            $university->uni_logo = $request->test_uni_logo;
        }

        if($request->hasFile('uni_banner'))
        {
            if (Storage::exists('public/uploads/university/'.$university->uni_banner)) {
                Storage::delete('public/uploads/university/'.$university->uni_banner);
            }
            $uploadPath = "public/uploads/university/";
            $image = $request->file("uni_banner");
            $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
            $image->storeAs($uploadPath, $filename);
            $university->uni_banner = $filename;
        }else{
            $university->uni_banner = $request->test_uni_banner;
        }

        if($request->hasFile('uni_brochure'))
        {
            if (Storage::exists('public/uploads/university/'.$university->uni_brochure)) {
                Storage::delete('public/uploads/university/'.$university->uni_brochure);
            }
            $uploadPath = "public/uploads/university/";
            $image = $request->file("uni_brochure");
            $filename = time().'-'. rand(111111, 999999). '-' . rand(0, 1000). '.' .$image->getClientOriginalExtension();
            $image->storeAs($uploadPath, $filename);
            $university->uni_brochure = $filename;
        }else{
            $university->uni_brochure = $request->test_uni_brochure;
        }
        $university->save();
        if(count($request->uni_program_points) > 0)
        {
            foreach($request->uni_program_points as $key => $points)
            {
                if($request->uni_program_points[$key] != '')
                {
                    if($request->program_id[$key] != '')
                    {
                        $program = UniversityProgram::find($request->program_id[$key]);
                    }else{
                        $program = new UniversityProgram;
                        $program->university_id = $university->id;
                    }
                    $program->uni_program_points = $points;
                }
                $program->save();
            }
        }

        if(count($request->uni_course_title) > 0)
        {
            foreach($request->uni_course_title as $key => $title)
            {
                if($request->course_id[$key] != '')
                {
                    $course = UniversityCourse::find($request->course_id[$key]);
                }else{
                    $course = new UniversityCourse;
                    $course->university_id = $university->id;
                }
                $course->uni_course_title = $title;
                $course->save();
                foreach($request->uni_course[$key] as $ckey => $cpoints)
                {
                    if($request->course_point_id[$key][$ckey] != '')
                    {
                        $course_points = UniversityCoursesPoint::find($request->course_point_id[$key][$ckey]);
                    }else{
                        $course_points = new UniversityCoursesPoint;
                        $course_points->uni_course_id = $course->id;
                    } 
                    $course_points->uni_course = $cpoints;
                    $course_points->save();
                }
            }
        }

        if(count($request->uni_college_city) > 0)
        {
            foreach($request->uni_college_city as $key => $city)
            {
                if($request->uni_college_city[$key] != '')
                {
                    if($request->college_id[$key] != '')
                    {
                        $college = UniversityColleges::find($request->college_id[$key]);
                    }else{
                        $college = new UniversityColleges;
                        $college->university_id = $university->id;
                    }
                    $college->uni_college_city = $city;
                    $college->save();
                    foreach($request->uni_college_points[$key] as $clkey => $clpoints)
                    {
                        if($request->uni_college_points[$key][$clkey] != '')
                        {
                            if($request->college_point_id[$key][$clkey] != '')
                            {
                                $college_points = UniversityCollegesPoint::find($request->college_point_id[$key][$clkey]);
                            }else{
                                $college_points = new UniversityCollegesPoint;
                                $college_points->uni_college_id = $college->id;
                            }
                            
                            $college_points->uni_college_points = $clpoints;
                            $college_points->save();
                        }

                    }
                }
            }
        }

        return back()->with('success', 'University Has Been Updated Successfully.');
    }


    public function deleteProgramPoints(Request $request)
    {
        if($request->key != '')
        {
            $program = UniversityProgram::find($request->key);
            $deleted = $program->delete();
            if($deleted)
            {
                return json_encode(['result' => 'success']);
            }else{
                return json_encode(['result' => 'failed']);
            }

        }else{
            return json_encode(['result' => 'failed']);
        }
    }

    public function deleteCourse(Request $request)
    {
        if($request->key != '')
        {
            $course = UniversityCourse::find($request->key);
            $deleted = $course->delete();
            if($deleted)
            {
                return json_encode(['result' => 'success']);
            }else{
                return json_encode(['result' => 'failed']);
            }

        }else{
            return json_encode(['result' => 'failed']);
        }
    }

    public function deleteCoursePoints(Request $request)
    {
        if($request->key != '')
        {
            $coursePoint = UniversityCoursesPoint::find($request->key);
            $deleted = $coursePoint->delete();
            if($deleted)
            {
                return json_encode(['result' => 'success']);
            }else{
                return json_encode(['result' => 'failed']);
            }

        }else{
            return json_encode(['result' => 'failed']);
        }
    }

    public function deleteCollege(Request $request)
    {
        if($request->key != '')
        {
            $college = UniversityColleges::find($request->key);
            $deleted = $college->delete();
            if($deleted)
            {
                return json_encode(['result' => 'success']);
            }else{
                return json_encode(['result' => 'failed']);
            }

        }else{
            return json_encode(['result' => 'failed']);
        }
    }

    public function deleteCollegePoints(Request $request)
    {
        if($request->key != '')
        {
            $collegePoint = UniversityCollegesPoint::find($request->key);
            $deleted = $collegePoint->delete();
            if($deleted)
            {
                return json_encode(['result' => 'success']);
            }else{
                return json_encode(['result' => 'failed']);
            }

        }else{
            return json_encode(['result' => 'failed']);
        }
    }




}
