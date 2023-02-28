@extends ('admin.layout')
@section('title', 'Country')
@section('country', 'active')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Update </span>Country</h4>
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
<h5 class="mb-0">Update Country</h5>
</div>
<div class="card-body">

<!-- <form> -->
<form action="{{ route('admin.country.update', $edit_list['id']) }}" method="POST">
    @csrf

<div class="mb-3">
<label class="form-label" for="feature_name">Parent Country</label>
<select class="form-control" id="parent_id" name="parent_id">
    <option value="" selected>Select parent Country</option>
    @if(count($country_list) > 0)
    @foreach($country_list as $country)
@if($edit_list['parent_id'] > 0 )
    @if($edit_list['parent_id'] == $country->id)
<option value="{{ $country->id }}" selected>{{ $country->country_name }}</option>
   @endif
@else
<option value="{{ $country->id }}">{{ $country->country_name }}</option>
@endif
@endforeach
@endif
</select>
</div>


<div class="mb-3">
<label class="form-label" for="country_name">Country Name</label>
<input type="text" class="form-control" id="country_name" name="country_name" value="{{ $edit_list['country_name'] }}" placeholder="Country Name">
@if ($errors->has('country_name'))
<span class="text-danger">{{ $errors->get('country_name') }}</span>
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