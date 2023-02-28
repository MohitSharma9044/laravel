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
<form action="{{ route('admin.course.create') }}" method="POST">
    @csrf

<div class="mb-3">
<label class="form-label" for="course_name">Course Name</label>
<input type="text" class="form-control" id="course_name" name="course_name" placeholder="Course Name">
@if ($errors->has('course_name'))
<span class="text-danger">{{ $errors->first('course_name') }}</span>
@endif
</div>

<div class="mb-3">
<label class="form-label" for="course_year">Course Year</label>
<input type="text" class="form-control" id="course_year" name="course_year" placeholder="Course Year">
@if ($errors->has('course_year'))
<span class="text-danger">{{ $errors->first('course_year') }}</span>
@endif
</div>

<div class="mb-3">
<label class="form-label" for="course_description">Course Description (Optional)</label>
<input type="text" class="form-control" id="course_description" name="course_description" placeholder="Course Description">
@if ($errors->has('course_description'))
<span class="text-danger">{{ $errors->first('course_description') }}</span>
@endif
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>




<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4">
<span class="text-muted fw-light">Manage  /</span> Courses
</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
<div class="table-responsive text-nowrap">
<table class="table">
<thead>
<tr>
<th>Sr. No.</th>
<th>Course Name</th>
<th>Course Year</th>
<th>Course Description</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>
<tbody class="table-border-bottom-0">
    @if(count($course_list) > 0)
    @php $i=0; @endphp
    @foreach($course_list as $course)
    @php $i++; @endphp
    <tr>
    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $i }}</strong></td>
    <td>{{ $course->course_name }}</td>
    <td>{{ $course->course_year }}</td>
    <td>{{ $course->course_description }}</td>
    <td><span class="badge bg-label-primary me-1">{{ $course->status }}</span></td>
    <td>
    <div class="demo-inline-spacing">     
    
@if($course->status == 'Enabled')
    <a href="{{ route('admin.course.hide', $course->id) }}" class="btn btn-info btn-sm">Hide</a>
    @else
 <a href="{{ route('admin.course.show', $course->id) }}" class="btn btn-success btn-sm">Show</a>
 @endif


    <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
    <a href="{{ route('admin.course.delete', $course->id) }}" class="btn btn-danger btn-sm">Delete</a>

        </div>
    </td>
    </tr>
@endforeach
@endif




</tbody>
</table>
</div>

</div>







<hr class="my-5">

<!-- Bootstrap Pagination Laravel  -->
{!! $course_list->links() !!}
</div>

@endsection

@section('script')
    <script>
        CKEDITOR.replace('course_description', {
        toolbar: 'default'
    });
    </script>
@endsection