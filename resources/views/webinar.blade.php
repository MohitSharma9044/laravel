@extends('layouts.layout')
@section('title', 'Webinar')


@section('content')

<section>
<div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
<div class="fixed-bg" style="background-image: url({{ asset('front_assets/img/pag-top-bg.jpg') }});"></div>
<div class="container">
<div class="page-title-wrap text-center w-100">
<div class="page-title-inner d-inline-block">
<h1 class="mb-0">Webinar</h1>
<ol class="breadcrumb mb-0 justify-content-center">
<li class="breadcrumb-item"><a href="{{ url('/') }}" title="">Home</a></li>
<li class="breadcrumb-item active">Webinar</li>
</ol>
</div>
</div><!-- Page Title Wrap -->
</div>
</div>
</section>


<section>
<div class="w-100 pt-100 pb-110 position-relative">
<div class="container">


<div class="row">
<div class="post_degree wev">



<table>
<tr>
<th class="redd">Date</th>
<th class="redd">Event Name</th>
<th class="redd">Action</th>
</tr>


<tr>
<td>24-08-2022</td>
<td>Classroom Strategies for Building EL Students’ Confidence and Success</td>
<td><a href="#">Book Slot </a></td>
</tr>
<tr>
<td>25-08-2022</td>
<td>Here We Come, Kindergarten! How the Science of Reading Elevates Our Early Learners to Success</td>
<td><a href="#">Book Slot </a></td>
</tr>
<tr>
<td>26-08-2022</td>
<td>Connecting Teaching with Tech</td>
<td><a href="#">Book Slot </a></td>
</tr>
<tr>
<td>30-08-2022</td>
<td>Getting Reading Groups Right</td>
<td><a href="#">Book Slot </a></td>
</tr>
<tr>
<td>01-09-2022</td>
<td>Enrollment to Graduation: How to Build Better Education Experiences this Year</td>
<td><a href="#">Book Slot </a></td>
</tr>
<tr>
<td>05-09-2022</td>
<td>Supporting 21st Century Skills with a Whole-Child Focus</td>
<td><a href="#">Book Slot </a></td>
</tr>


</table>




</div>
</div>


</div>
</div>
</section>
@endsection

