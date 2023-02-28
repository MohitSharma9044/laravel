@extends ('admin.layout')
@section('title', 'University')
@section('university', 'active')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit </span>University</h4>
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
<form action="{{ route('admin.university.update', $university_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
<label class="form-label" for="country_id">Country</label>
<select class="form-control" id="country_id" name="country_id">
<option value="" selected>Select Country</option>
@if(count($country_list) > 0)
    @foreach($country_list as $country)
    <option value="{{$country->id}}" @if(!empty($university_list)) @if($university_list['country_id'] == $country->id) {{'selected'}} @endif  @endif>{{ $country->country_name }}</option>
    @endforeach
@endif
</select>
@if ($errors->has('country_id'))
<span class="text-danger">{{ $errors->first('country_id') }}</span>
@endif
</div>

<div class="mb-3">
    <label class="form-label" for="uni_name">Name</label>
    <input type="text" class="form-control" name="uni_name" value="@if($university_list['uni_name'] != '') {{ $university_list['uni_name'] }} @endif" id="uni_name" placeholder="University Name">
    @if ($errors->has('uni_name'))
    <span class="text-danger">{{ $errors->first('uni_name') }}</span>
    @endif
</div>

<div class="mb-3">
    <label class="form-label" for="uni_thumb_image">Thumbnails Image</label>
    <img src="{{ asset('storage/uploads/university/'.$university_list['uni_thumb_image']) }}" alt="" class="form-control img-fluid w10">
    <input type="file" class="form-control" name="uni_thumb_image" id="uni_thumb_image" placeholder="University Thumbnails">
    <input type="hidden" class="form-control" name="test_uni_thumb_image" value="@if($university_list['uni_thumb_image'] != '') {{ $university_list['uni_thumb_image'] }} @endif">
</div>

<div class="mb-3">
    <label class="form-label" for="uni_logo">Logo Image</label>
    <img src="{{ asset('storage/uploads/university/'.$university_list['uni_logo']) }}" alt="" class="form-control img-fluid w10">
    <input type="file" class="form-control" name="uni_logo" id="uni_logo" placeholder="University Logo">
    <input type="hidden" class="form-control" name="test_uni_logo" value="@if($university_list['uni_logo'] != '') {{ $university_list['uni_logo'] }} @endif">
</div>

<div class="mb-3">
    <label class="form-label" for="uni_banner">Banner Image</label>
    <img src="{{ asset('storage/uploads/university/'.$university_list['uni_banner']) }}" alt="" class="form-control img-fluid w10">
    <input type="file" class="form-control" name="uni_banner" id="uni_banner" placeholder="University Banner">
    <input type="hidden" class="form-control" name="test_uni_banner" value="@if($university_list['uni_banner'] != '') {{ $university_list['uni_banner'] }} @endif">
</div>

<div class="mb-3">
    <label class="form-label" for="uni_mobiles">Mobile No's.</label>
    <input type="text" class="form-control" name="uni_mobiles" id="uni_mobiles" value="@if($university_list['uni_mobiles'] != '') {{ $university_list['uni_mobiles'] }} @endif" placeholder="University Contact Numbers">
    @if ($errors->has('uni_mobiles'))
    <span class="text-danger">{{ $errors->first('uni_mobiles') }}</span>
    @endif
</div>

<div class="mb-3">
    <label class="form-label" for="uni_emails">Email's</label>
    <input type="email" class="form-control" name="uni_emails" id="uni_emails" value="@if($university_list['uni_emails'] != '') {{ $university_list['uni_emails'] }} @endif" placeholder="University Emails">
    @if ($errors->has('uni_emails'))
    <span class="text-danger">{{ $errors->first('uni_emails') }}</span>
    @endif
</div>

<div class="mb-3">
    <label class="form-label" for="uni_brochure">Brochure</label>
    <img src="{{ asset('storage/uploads/university/'.$university_list['uni_brochure']) }}" alt="" class="form-control img-fluid w10">
    <input type="file" class="form-control" name="uni_brochure" id="uni_brochure" placeholder="University Brochure">
    <input type="hidden" class="form-control" name="test_uni_brochure" value="@if($university_list['uni_brochure'] != '') {{ $university_list['uni_brochure'] }} @endif">
</div>

<h4>About Section</h4>

<div class="mb-3">
    <label class="form-label" for="uni_description">Description</label>
    <textarea class="form-control" name="uni_description" id="uni_description" placeholder="University Description" cols="30" rows="10">@if($university_list['uni_description'] != '') {{ $university_list['uni_description'] }} @endif</textarea>
    @if ($errors->has('uni_description'))
    <span class="text-danger">{{ $errors->first('uni_description') }}</span>
    @endif
</div>

<div class="mb-3">
    <label class="form-label" for="uni_program_title">Program Title</label>
    <input type="text" class="form-control" name="uni_program_title" id="uni_program_title" value="@if($university_list['uni_program_title'] != '') {{ $university_list['uni_program_title'] }} @endif" placeholder="University Program Title">
    @if ($errors->has('uni_program_title'))
    <span class="text-danger">{{ $errors->first('uni_program_title') }}</span>
    @endif
</div>

<div class="programBox">
    @if (count($program_list) > 0)
        @foreach ($program_list as $key => $program)

    <div class="programRow row" id="programRow_{{$key}}">
        <input type="hidden" name="program_id[]" value="{{$program->id}}">
        <div class="mb-3 col-10">
            @if($key < 1)
            <label class="form-label" for="uni_program_points_{{$key}}">Program Points</label>
            @endif
            <input type="text" class="form-control" name="uni_program_points[]" id="uni_program_points_{{$key}}" value="{{$program->uni_program_points}}" placeholder="University Program Points">
            @if ($errors->has('uni_program_points'))
    <span class="text-danger">{{ $errors->first('uni_program_points') }}</span>
    @endif
        </div>
        <div class="mb-3 col-2">
            @if($key < 1)
            <label class="form-label">&nbsp;</label>
           <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreProgramPoints();">Add</a>
            @else
            <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeProgramPoints('{{ $program->id }}');">Remove</a>
            @endif
        </div>
    </div>
                
    @endforeach
        
    @endif
</div>

<h4>Course Section</h4>
<div class="mb-3 col-10">
    <label class="form-label" for="uni_course_heading">Course Heading</label>
    <input type="text" class="form-control" name="uni_course_heading" id="uni_course_heading" value="@if($university_list['uni_course_heading'] != '') {{ $university_list['uni_course_heading'] }} @endif" placeholder="University Course Heading">
    @if ($errors->has('uni_course_heading'))
    <span class="text-danger">{{ $errors->first('uni_course_heading') }}</span>
    @endif
</div>

<div class="courseBox">
    @if(count($courses_list) > 0)
    @foreach ($courses_list as $key => $course)
    @php $courseData = getUniversityCoursePointListById($course['id']); @endphp
<div class="courseRow row" id="courseRow_{{$key}}">
    <input type="hidden" name="course_id[]" value="{{$course['id']}}">
    <div class="mb-3 col-10">
        <label class="form-label" for="uni_course_title_{{$key}}">Course Title</label>
        <input type="text" class="form-control" name="uni_course_title[]" value="@if($course['uni_course_title'] != '') {{ $course['uni_course_title'] }} @endif" id="uni_course_title_{{$key}}" placeholder="University Course Title">
        @if ($errors->has('uni_course_title'))
        <span class="text-danger">{{ $errors->first('uni_course_title') }}</span>
        @endif
    </div>
    <div class="mb-3 col-2">
        <label class="form-label">&nbsp;</label>
        @if ($key < 1)
        <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreCourses();">Add</a>  
        @else    
       <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeCourses('{{$course['id']}}');">Remove</a>
        @endif
    </div>
    <div class="coursePointBox_{{$key}}">
        @if (count($courseData) > 0)
            @foreach ($courseData as $pKey => $coursePoints)
        <div class="coursePointRow row" id="coursePointRow_{{$pKey}}">
            <input type="hidden" name="course_point_id[{{$key}}][]" value="{{$coursePoints->id}}">
            <div class="mb-3 col-9">
                @if ($pKey < 1)
                <label class="form-label" for="uni_course_{{$pKey}}">Course</label>
                @endif
                <select class="form-control" name="uni_course[{{$key}}][]" id="uni_course_{{$pKey}}">
                    @if (count($course_list) > 0)
                        @foreach ($course_list as $main_course)
                        <option value="{{ $main_course->id }}" @if($coursePoints->uni_course == $main_course->id) {{ 'selected' }} @endif>{{ $main_course->course_name }}</option>
                        @endforeach
                    @endif
                </select>
                @if ($errors->has('uni_course'))
                <span class="text-danger">{{ $errors->first('uni_course') }}</span>
                @endif
            </div>
            <div class="mb-3 col-1">
                @if ($pKey < 1)
                <label class="form-label">&nbsp;</label>
               <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreCoursePoints('{{$key}}');"><i class='bx bx-plus'></i></a>
                @else
                <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeCoursePoints('{{$coursePoints->id}}');"><i class='bx bx-minus'></i></a>
                @endif
                
            </div>
            <div class="mb-3 col-2">
            </div>
        </div>
        @endforeach
            
        @endif
    </div>
</div>   
@endforeach
@endif
</div>

<h4>Affiliated Colleges Section</h4>
<div class="mb-3 col-10">
    <label class="form-label" for="uni_college_heading">Colleges Heading</label>
    <input type="text" class="form-control" name="uni_college_heading" id="uni_college_heading" value="@if($university_list['uni_college_heading'] != '') {{ $university_list['uni_college_heading'] }} @endif" placeholder="University Colleges Heading">
    @if ($errors->has('uni_college_heading'))
    <span class="text-danger">{{ $errors->first('uni_college_heading') }}</span>
    @endif
</div>
<div class="collegeBox">
    @if (count($college_list) > 0)
        @foreach ($college_list as $key => $uCollege)
@php $collegeData = getUniversityCollegePointListById($uCollege['id']); @endphp
    <div class="collegeRow row" id="collegeRow_{{$key}}">
        <input type="hidden" name="college_id[]" value="{{$uCollege['id']}}">
        <div class="mb-3 col-10">
            @if ($key < 1)
            <label class="form-label" for="uni_college_city_{{$key}}">City</label>
            @endif
            <input type="text" class="form-control" name="uni_college_city[]" id="uni_college_city_{{$key}}" value="@if($uCollege['uni_college_city'] != '') {{ $uCollege['uni_college_city'] }} @endif" placeholder="University College City">
            @if ($errors->has('uni_college_city'))
            <span class="text-danger">{{ $errors->first('uni_college_city') }}</span>
            @endif
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">&nbsp;</label>
            @if ($key < 1)
            <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreColleges();">Add</a>
            @else
            <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeColleges('{{$uCollege['id']}}');">Remove</a>
            @endif
           
           
        </div>
        <div class="collegePointBox_{{$key}}">
            @if (count($collegeData) > 0)
                @foreach ($collegeData as $clpKey => $collegePoints )
            
            <div class="collegePointRow row" id="collegePointRow_{{$clpKey}}">
                <input type="hidden" name="college_point_id[{{$key}}][]" value="{{$collegePoints->id}}">
                <div class="mb-3 col-9">
                    @if ($clpKey < 1)
                    <label class="form-label" for="uni_college_points_{{$clpKey}}">Colleges Points</label>
                    @endif
                    <input type="text" class="form-control" name="uni_college_points[{{$key}}][]" value="@if($collegePoints->uni_college_points != '') {{$collegePoints->uni_college_points}} @endif" id="uni_college_points_{{$clpKey}}" placeholder="University College Points">
                    @if ($errors->has('uni_college_points'))
                    <span class="text-danger">{{ $errors->first('uni_college_points') }}</span>
                    @endif
                </div>
                <div class="mb-3 col-1">
                    @if ($clpKey < 1)
                    <label class="form-label">&nbsp;</label>
                    <a href="javascript:void(0);" class="btn btn-info form-control" onclick="addMoreCollegesPoints('{{$key}}');"><i class='bx bx-plus'></i></a>
                        @else
                        <a href="javascript:void(0);" class="btn btn-danger form-control" onclick="removeCollegesPoints('{{$collegePoints->id}}');"><i class='bx bx-minus'></i></a>
                    @endif
                    
                </div>
                <div class="mb-3 col-2">
                </div>
            </div>
                    
            @endforeach
            @endif
        </div>
    </div>
                
    @endforeach
        
    @endif
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
            <input type="hidden" name="program_id[]" value="">
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
        <input type="hidden" name="course_id[]" value="">
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
            <input type="hidden" name="course_point_id[{{0}}][]" value="">
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
            <input type="hidden" name="course_point_id[${key}][]" value="">
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
            <input type="hidden" name="college_id[]" value="">
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
                <input type="hidden" name="college_point_id[0][]" value="">
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
            <input type="hidden" name="college_point_id[${key}][]" value="">
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
        if(key != '')
        {
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                method:"POST",
                url:"{{ route('admin.university.delete-program') }}",
                data:{key:key},
                success:function(res)
                {
                    let data = JSON.parse(res);
                    if(data.result == 'success')
                    {
                        window.location.reload();
                    }
                    if(data.result == 'failed')
                    {
                        window.location.reload();
                    }
                  
                }
            });
        }
    $('#programRow_'+key).remove();
    }

    function removeCourses(key)
    {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                method:"POST",
                url:"{{ route('admin.university.delete-course') }}",
                data:{key:key},
                success:function(res)
                {
                    let data = JSON.parse(res);
                    if(data.result == 'success')
                    {
                        window.location.reload();
                    }
                    if(data.result == 'failed')
                    {
                        window.location.reload();
                    }
                  
                }
            });
    }

    function removeCoursePoints(key)
    {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                method:"POST",
                url:"{{ route('admin.university.delete-course-points') }}",
                data:{key:key},
                success:function(res)
                {
                    let data = JSON.parse(res);
                    if(data.result == 'success')
                    {
                        window.location.reload();
                    }
                    if(data.result == 'failed')
                    {
                        window.location.reload();
                    }
                  
                }
            });
    }

    function removeColleges(key)
    {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                method:"POST",
                url:"{{ route('admin.university.delete-college') }}",
                data:{key:key},
                success:function(res)
                {
                    let data = JSON.parse(res);
                    if(data.result == 'success')
                    {
                        window.location.reload();
                    }
                    if(data.result == 'failed')
                    {
                        window.location.reload();
                    }
                  
                }
            });
    }
    function removeCollegesPoints(key)
    {
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        method:"POST",
        url:"{{ route('admin.university.delete-college-points') }}",
        data:{key:key},
        success:function(res)
        {
        let data = JSON.parse(res);
        if(data.result == 'success')
        {
        window.location.reload();
        }
        if(data.result == 'failed')
        {
        window.location.reload();
        }
        }
        });
    }


</script>

@endsection