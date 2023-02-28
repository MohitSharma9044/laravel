@extends ('admin.layout')
@section('title', 'Course')
@section('course', 'active')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add </span>Course</h4>
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
<div class="card-header d-flex justify-content-between align-items-center">
<h5 class="mb-0">Add Country</h5>
</div>
<div class="card-body">
<!-- <form> -->
<form action="{{ route('admin.course.update', $course_list['id']) }}" method="POST">
    @csrf

<div class="mb-3">
<label class="form-label" for="course_name">Course Name</label>
<input type="text" class="form-control" id="course_name" name="course_name" value="{{ $course_list['course_name'] }}" placeholder="Course Name">
@if ($errors->has('course_name'))
<span class="text-danger">{{ $errors->first('course_name') }}</span>
@endif
</div>

<div class="mb-3">
<label class="form-label" for="course_year">Course Year</label>
<input type="text" class="form-control" id="course_year" name="course_year" value="{{ $course_list['course_year'] }}" placeholder="Course Year">
@if ($errors->has('course_year'))
<span class="text-danger">{{ $errors->first('course_year') }}</span>
@endif
</div>

<div class="mb-3">
<label class="form-label" for="course_description">Course Description (Optional)</label>
<textarea class="form-control" id="course_description" name="course_description" placeholder="Course Description" >{{ $course_list['course_description'] }}</textarea>
@if ($errors->has('course_description'))
<span class="text-danger">{{ $errors->first('course_description') }}</span>
@endif
</div>

<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
</div>
</div>


@endsection

@section('script')
    <script>
        CKEDITOR.replace('course_description', {
        toolbar: 'default'
    });
    </script>
@endsection