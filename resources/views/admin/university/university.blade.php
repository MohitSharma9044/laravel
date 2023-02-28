@extends ('admin.layout')
@section('title', 'University')
@section('university', 'active')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add </span>University</h4>
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ Session::get('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{ Session::get('error') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!-- Basic Layout -->
<div class="row">
<div class="col-xl">
<div class="card mb-4">
<div class="card-body">
<!-- <form> -->
<form action="{{ route('admin.university.create') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
<label class="form-label" for="country_id">Country</label>
<select class="form-control" id="country_id" name="country_id">
<option value="" selected>Select Country</option>
@if(count($country_list) > 0)
    @foreach($country_list as $country)
    <option value="{{$country->id}}">{{ $country->country_name }}</option>
    @endforeach
@endif
</select>
</div>

<div class="mb-3">
    <label class="form-label" for="uni_name">Name</label>
    <input type="text" class="form-control" name="uni_name" id="uni_name" placeholder="University Name">
</div>

<div class="mb-3">
    <label class="form-label" for="uni_logo">Logo Image</label>
    <input type="file" class="form-control" name="uni_logo" id="uni_logo" placeholder="University Logo">
</div>

<div class="mb-3">
    <label class="form-label" for="uni_banner">Banner Image</label>
    <input type="file" class="form-control" name="uni_banner" id="uni_banner" placeholder="University Banner">
</div>

<div class="mb-3">
    <label class="form-label" for="uni_mobiles">Mobile No's.</label>
    <input type="text" class="form-control" name="uni_mobiles" id="uni_mobiles" placeholder="University Contact Numbers">
</div>

<div class="mb-3">
    <label class="form-label" for="uni_emails">Email's</label>
    <input type="email" class="form-control" name="uni_emails" id="uni_emails" placeholder="University Emails">
</div>

<div class="mb-3">
    <label class="form-label" for="uni_brochure">Brochure</label>
    <input type="file" class="form-control" name="uni_brochure" id="uni_brochure" placeholder="University Brochure">
</div>

<h4>About Section</h4>

<div class="mb-3">
    <label class="form-label" for="uni_description">Description</label>
    <textarea class="form-control" name="uni_description" id="uni_description" placeholder="University Description" cols="30" rows="10"></textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="uni_program_title">Program Title</label>
    <input type="text" class="form-control" name="uni_program_title" id="uni_program_title" placeholder="University Program Title">
</div>

<div class="programBox">
    <div class="programRow row" id="programRow_0">
        <div class="mb-3 col-10">
            <label class="form-label" for="uni_program_points_0">Program Points</label>
            <input type="text" class="form-control" name="uni_program_points[]" id="uni_program_points_0" placeholder="University Program Points">
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">&nbsp;</label>
           <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreProgramPoints();">Add</a>
        </div>
    </div>
</div>

<h4>Course Section</h4>
<div class="mb-3 col-10">
    <label class="form-label" for="uni_course_heading">Course Heading</label>
    <input type="text" class="form-control" name="uni_course_heading" id="uni_course_heading" placeholder="University Course Heading">
</div>

<div class="courseBox">
    
<div class="courseRow row" id="courseRow_0">
    <div class="mb-3 col-10">
        <label class="form-label" for="uni_course_title_0">Course Title</label>
        <input type="text" class="form-control" name="uni_course_title[]" id="uni_course_title_0" placeholder="University Course Title">
    </div>
    <div class="mb-3 col-2">
        <label class="form-label">&nbsp;</label>
       <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreCourses();">Add</a>
    </div>
    <div class="coursePointBox_0">
        <div class="coursePointRow row" id="coursePointRow_0">
            <div class="mb-3 col-9">
                <label class="form-label" for="uni_course_0">Course</label>
                <select class="form-control" name="uni_course[0][]" id="uni_course_0">
                    @if (count($course_list) > 0)
                        @foreach ($course_list as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-3 col-1">
                <label class="form-label">&nbsp;</label>
               <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreCoursePoints('0');"><i class='bx bx-plus'></i></a>
            </div>
            <div class="mb-3 col-2">
            </div>
        </div>
    </div>
</div>

</div>

<h4>Affiliated Colleges Section</h4>
<div class="mb-3 col-10">
    <label class="form-label" for="uni_college_heading">Colleges Heading</label>
    <input type="text" class="form-control" name="uni_college_heading" id="uni_college_heading" placeholder="University Colleges Heading">
</div>
<div class="collegeBox">
    
    <div class="collegeRow row" id="collegeRow_0">
        <div class="mb-3 col-10">
            <label class="form-label" for="uni_college_city_0">City</label>
            <input type="text" class="form-control" name="uni_college_city[]" id="uni_college_city_0" placeholder="University College City">
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">&nbsp;</label>
           <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreColleges();">Add</a>
        </div>
        <div class="collegePointBox_0">
            <div class="collegePointRow row" id="collegePointRow_0">
                <div class="mb-3 col-9">
                    <label class="form-label" for="uni_college_points_0">Colleges Points</label>
                    <input type="text" class="form-control" name="uni_college_points[0][]" id="uni_college_points_0" placeholder="University College Points">
                </div>
                <div class="mb-3 col-1">
                    <label class="form-label">&nbsp;</label>
                   <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreCollegesPoints('0');"><i class='bx bx-plus'></i></a>
                </div>
                <div class="mb-3 col-2">
                </div>
            </div>
        </div>
    </div>
    
    </div>





<button type="submit" class="btn btn-primary">Send</button>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function()
    {
        CKEDITOR.replace('uni_description');

    });





    let pp = 0;
    function addMoreProgramPoints()
    {
        pp++;
        let html = `<div class="programRow row" id="programRow_${pp}">
        <div class="mb-3 col-10">
            <input type="text" class="form-control" name="uni_program_points[]" placeholder="University Program Points">
        </div>
        <div class="mb-3 col-2">
           <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeProgramPoints('${pp}');">Remove</a>
        </div>
    </div>`;
    $('.programBox').append(html);
    }

    let cc = 0;
    function addMoreCourses()
    {
    cc++;
    let html = `<div class="courseRow row" id="courseRow_${cc}">
    <div class="mb-3 col-10">
    <label class="form-label" for="uni_course_title_${cc}">Course Title</label>
    <input type="text" class="form-control" name="uni_course_title[]" id="uni_course_title_${cc}" placeholder="University Course Title">
    </div>
    <div class="mb-3 col-2">
    <label class="form-label">&nbsp;</label>
    <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeCourses('${cc}');">Remove</a>
    </div>
    <div class="coursePointBox_${cc}">
        <div class="coursePointRow row" id="coursePointRow_0">
            <div class="mb-3 col-9">
                <label class="form-label" for="uni_course_0">Course</label>
                <select class="form-control" name="uni_course[${cc}][]" id="uni_course_0">
                    @if (count($course_list) > 0)
                        @foreach ($course_list as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-3 col-1">
                <label class="form-label">&nbsp;</label>
               <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreCoursePoints('${cc}');"><i class='bx bx-plus'></i></a>
            </div>
            <div class="mb-3 col-2">
            </div>
        </div>
    </div>
    </div>`; 
    $('.courseBox').append(html);
    }

    let ccl=0;
    function addMoreCoursePoints(key)
    {
        ccl++;
        let html = `<div class="coursePointRow row" id="coursePointRow_${ccl}">
            <div class="mb-3 col-9">
                <select class="form-control" name="uni_course[${key}][]" id="uni_course_${ccl}">
                    @if (count($course_list) > 0)
                        @foreach ($course_list as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-3 col-1">
               <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeCoursePoints('${ccl}');"><i class='bx bx-minus'></i></a>
            </div>
            <div class="mb-3 col-2">
            </div>
        </div>`;
        $('.coursePointBox_'+key).append(html);
    }



let cl=0;
    function addMoreColleges()
    {
        cl++;
        let html = `<div class="collegeRow row" id="collegeRow_${cl}">
        <div class="mb-3 col-10">
            <label class="form-label" for="uni_college_city_${cl}">City</label>
            <input type="text" class="form-control" name="uni_college_city[]" id="uni_college_city_${cl}" placeholder="University College City">
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">&nbsp;</label>
           <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeColleges('${cl}');">Remove</a>
        </div>
        <div class="collegePointBox_${cl}">
            <div class="collegePointRow row" id="collegePointRow_0">
                <div class="mb-3 col-9">
                    <label class="form-label" for="uni_college_points_0">Colleges Points</label>
                    <input type="text" class="form-control" name="uni_college_points[${cl}][]" id="uni_college_points_0" placeholder="University College Points">
                </div>
                <div class="mb-3 col-1">
                    <label class="form-label">&nbsp;</label>
                   <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreCollegesPoints('${cl}');"><i class='bx bx-plus'></i></a>
                </div>
                <div class="mb-3 col-2">
                </div>
            </div>
        </div>
    </div>`;
    $('.collegeBox').append(html);
    }
    let clp=0;
    function addMoreCollegesPoints(key)
    {
        clp++;
        let html = `<div class="collegePointRow row" id="collegePointRow_${clp}">
                <div class="mb-3 col-9">
                    <input type="text" class="form-control" name="uni_college_points[${key}][]" id="uni_college_points_${clp}" placeholder="University College Points">
                </div>
                <div class="mb-3 col-1">
                   <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeCollegesPoints('${clp}');"><i class='bx bx-minus'></i></a>
                </div>
                <div class="mb-3 col-2">
                </div>
            </div>`;

            $('.collegePointBox_'+key).append(html);
    }


    function removeProgramPoints(key)
    {
    $('#programRow_'+key).remove();
    }

    function removeCourses(key)
    {
    $('#courseRow_'+key).remove();
    }

    function removeCoursePoints(key)
    {
    $('#coursePointRow_'+key).remove();
    }

    function removeColleges(key)
    {
    $('#collegeRow_'+key).remove();
    }
    function removeCollegesPoints(key)
    {
    $('#collegePointRow_'+key).remove();
    }



</script>

@endsection