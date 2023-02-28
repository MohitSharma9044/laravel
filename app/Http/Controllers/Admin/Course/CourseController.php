<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Course\Course;
use Carbon\Carbon;

class CourseController extends Controller
{
    public function index()
    {
        $data['course_list'] = Course::paginate(10);
        return view('admin.course.course', $data);
    }


    public function createCourse(Request $request)
    {
        $request->validate([
            'course_name' => 'required|unique:courses,course_name',
        ]);
        $course = new Course();
        $course->course_name = $request->course_name;
        $course->course_slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->course_name)));
        $course->course_year = $request->course_year;
        $course->course_description = $request->course_description;
        $course->created_at = Carbon::now();
        $inserted = $course->save();
        if($inserted)
        {
            return back()->with('success', 'Course Has Been Inserted Successfully.');
        }else{
            return back()->with('error', 'Insertion Has Been Failed.');
        }
    }

    public function hideCourse(Request $request, $id)
    {
        if(!empty($id))
        {
            $course = Course::find($id);
            $course->status = "Disabled";
            $updated = $course->save();
            if($updated)
            {
                return back()->with('success', 'Status Has Been Changed Successfully.');
            }else{
                return back()->with('error', 'Updation Failed.');
            }
        }else{
            return back()->with('error', 'There are some technical issue. We will fixed shortly.');
        }
    }

    public function showCourse(Request $request, $id)
    {
        if(!empty($id))
        {
            $course = Course::find($id);
            $course->status = "Enabled";
            $updated = $course->save();
            if($updated)
            {
                return back()->with('success', 'Status Has Been Changed Successfully.');
            }else{
                return back()->with('error', 'Updation Failed.');
            }
        }else{
            return back()->with('error', 'There are some technical issue. We will fixed shortly.');
        }
    }

    public function editCourse(Request $request, $id)
    {
        $data['course_list'] = Course::find($id);
        return view('admin.course.edit-course', $data);
    }

    public function updateCourse(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required',
        ]);
        $course = Course::find($id);
        $course->course_name = $request->course_name;
        $course->course_slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->course_name)));
        $course->course_year = $request->course_year;
        $course->course_description = $request->course_description;
        $course->updated_at = Carbon::now();
        $updated = $course->save();
        if($updated)
        {
            return back()->with('success', 'Course Has Been Updated Successfully.');
        }else{
            return back()->with('error', 'Updation Failed.');
        }
    }

    public function deleteCourse(Request $request, $id)
    {
        if(!empty($id))
        {
            $course = Course::find($id);
            $deleted = $course->delete();
            if($deleted)
            {
                return back()->with('success', 'Course Has Been Deleted Successfully.');
            }else{
                return back()->with('error', 'Deletion Failed.');
            }
        }else{
            return back()->with('error', 'There are some technical issue. We will fixed shortly.');
        }
    }
}
