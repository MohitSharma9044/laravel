@extends ('admin.layout')
@section('title', 'Country')
@section('country', 'active')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add </span>Country</h4>
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
<form action="{{ route('admin.country.create') }}" method="POST">
    @csrf

<div class="mb-3">
<label class="form-label" for="feature_name">Parent Country</label>
<select class="form-control" id="parent_id" name="parent_id">
    <option value="" selected>Select parent Country</option>
    @if(count($select_country_list) > 0)
    @foreach($select_country_list as $select_country)
<option value="{{ $select_country->id }}">{{ $select_country->country_name }}</option>
@endforeach
@endif
</select>
</div>


<div class="mb-3">
<label class="form-label" for="country_name">Country Name</label>
<input type="text" class="form-control" id="country_name" name="country_name" placeholder="Country Name">
@if ($errors->has('country_name'))
<span class="text-danger">{{ $errors->get('country_name') }}</span>
@endif
</div>
<button type="submit" class="btn btn-primary">Send</button>
</form>
</div>
</div>
</div>
</div>
</div>




<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4">
<span class="text-muted fw-light">Manage  /</span> Country
</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
<h5 class="card-header">Table Basic</h5>
<div class="table-responsive text-nowrap">
<table class="table">
<thead>
<tr>
<th>Sr. No.</th>
<th>Country Name</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>
<tbody class="table-border-bottom-0">
    @if(count($country_list) > 0)
    @php $i=0; @endphp
    @foreach($country_list as $country)
    @php $i++; @endphp
    <tr>
    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $i }}</strong></td>
    <td>{{ $country->country_name }}</td>
    <td><span class="badge bg-label-primary me-1">{{ $country->status }}</span></td>
    <td>
    <div class="demo-inline-spacing">     
    
@if($country->status == 'Enabled')
    <a href="{{ route('admin.country.hide', $country->id) }}" class="btn btn-info btn-sm">Hide</a>
    @else
 <a href="{{ route('admin.country.show', $country->id) }}" class="btn btn-success btn-sm">Show</a>
 @endif
    <a href="{{ route('admin.country.create-details', $country->id) }}" class="btn btn-dark btn-sm">Add Details</a>
    <a href="{{ route('admin.country.edit', $country->id) }}" class="btn btn-warning btn-sm">Edit</a>
    <a href="{{ route('admin.country.delete', $country->id) }}" class="btn btn-danger btn-sm">Delete</a>

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
{!! $country_list->links() !!}
</div>

@endsection