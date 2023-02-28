@extends ('admin.layout')
@section('title', 'University')
@section('university', 'active')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Manage  /</span> University
    </h4>
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
    <div class="card">
    <div class="table-responsive text-nowrap">
    <table class="table">
    <thead>
    <tr>
    <th>Sr. No.</th>
    <th>Logo</th>
    <th>Country</th>
    <th>Name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Status</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody class="table-border-bottom-0">

        @if (count($university_list) > 0)
            @foreach ($university_list as $key => $university)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $key+1 }}</strong></td>
                    <td><img class="img-fluid" src="{{ asset('storage/uploads/university/'.$university->uni_logo) }}" alt="{{$university->uni_name}}"></td>
                    <td><span class="badge bg-label-primary me-1">{{getParentCountryById($university->country_id)}}</span></td>
                    <td><span class="badge bg-label-primary me-1">{{$university->uni_name}}</span></td>
                    <td>{{$university->uni_mobiles}}</td>
                    <td>{{$university->uni_emails}}</td>
                    <td>{{$university->status}}</td>
                    <td>
                        <div class="demo-inline-spacing">   
                            @if ($university->status == 'Disabled')
                            <a href="{{ route('admin.university.enabled', $university->id) }}" class="btn btn-success btn-sm">Enabled</a>
                            @else
                            <a href="{{ route('admin.university.disabled', $university->id) }}" class="btn btn-info btn-sm">Disabled</a>
                            @endif
                            <a href="{{ route('admin.university.edit', $university->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('admin.university.delete', $university->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
    
    </div>

@endsection
