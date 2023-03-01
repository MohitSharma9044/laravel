@extends('layouts.layout')
@section('title', 'Listing')
@section('style')
<link rel="stylesheet" href="{{ asset('front_assets/css/uikit.min.css') }}" />
@endsection
@section('content')
<section>
    <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
    <div class="fixed-bg" style="background-image: url(img/pag-top-bg.jpg);"></div>
    <div class="container">
    <div class="page-title-wrap text-center w-100">
    <div class="page-title-inner d-inline-block">
    <h1 class="mb-0">Universities</h1>
    <ol class="breadcrumb mb-0 justify-content-center">
    <li class="breadcrumb-item"><a href="index.php" title="">Home</a></li>
    <li class="breadcrumb-item active">Universities</li>
    </ol>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="university_list">
    <div class="container">
    <div class="row">
    <div class="col-md-3" style="position: sticky;top: 0;">
    <div class="uni_filter">
    
    <div class="filter_clear">
    <h3> Filter </h3>
    <span> Clear All </span>
    </div>
    
    <ul uk-accordion>
    <li class="uk-open">
    <a class="uk-accordion-title" href="#">Program</a>
    <div class="uk-accordion-content">
    
    <ul class="styled-checkbox">
    <li><input type="radio" name="intProgram" id="pri1">
    <label for="pri1">Medicine</label></li>
    
    <li><input type="radio" name="intProgram" id="pri17">
    <label for="pri17">Economics</label></li>
    
    <li><input type="radio" name="intProgram" id="pri18">
    <label for="pri18">Hospitality &amp; Tourism</label></li>
    
    <li><input type="radio" name="intProgram" id="pri9">
    <label for="pri9">Architecture &amp; Design</label></li>
    
    <li><input type="radio" name="intProgram" id="pri3">
    <label for="pri3">Engineering</label></li>
    
    <li><input type="radio" name="intProgram" id="pri2">
    <label for="pri2">Business</label></li>
    
    <li><input type="radio" name="intProgram" id="pri8">
    <label for="pri8">Health Science</label></li>
    
    <li><input type="radio" name="intProgram" id="pri10">
    <label for="pri10">Social Science</label></li>
    
    <li><input type="radio" name="intProgram" id="pri11">
    <label for="pri11">Media &amp; Arts</label></li>
    
    <li><input type="radio" name="intProgram" id="pri12">
    <label for="pri12">Food Science</label></li>
    
    <li><input type="radio" name="intProgram" id="pri13">
    <label for="pri13">Agriculture</label></li>
    
    <li><input type="radio" name="intProgram" id="pri14">
    <label for="pri14">Law</label></li>
    
    <li><input type="radio" name="intProgram" id="pri15">
    <label for="pri15">Management Studies</label></li>
    
    <li><input type="radio" name="intProgram" id="pri16">
    <label for="pri16">Aviation</label></li>
    
    </ul>
    
    </div>
    </li>
    <li>
    <a class="uk-accordion-title" href="#">Country</a>
    <div class="uk-accordion-content">
    <ul class="styled-checkbox">
    
    
    <li><input type="radio" name="countryId" id="country69"><label for="country69">Ireland</label></li>
    <li><input type="radio" name="countryId" id="country2"><label for="country2">Russia</label></li>
    <li><input type="radio" name="countryId" id="country4"><label for="country4">Georgia</label></li>
    <li><input type="radio" name="countryId" id="country59"><label for="country59">Serbia</label></li>
    <li><input type="radio" name="countryId" id="country55"><label for="country55">Romania</label></li>
    <li><input type="radio" name="countryId" id="country1"><label for="country1">China</label></li>
    <li><input type="radio" name="countryId" id="country18"><label for="country18">Poland</label></li>
    <li><input type="radio" name="countryId" id="country11"><label for="country11">Belarus</label></li>
    <li><input type="radio" name="countryId" id="country62"><label for="country62">Croatia</label></li>
    <li><input type="radio" name="countryId" id="country63"><label for="country63">Egypt</label></li>
    <li><input type="radio" name="countryId" id="country65"><label for="country65">Uzbekistan</label></li>
    <li><input type="radio" name="countryId" id="country49"><label for="country49">Slovakia</label></li>
    <li><input type="radio" name="countryId" id="country38"><label for="country38">Bangladesh</label></li>
    <li><input type="radio" name="countryId" id="country37"><label for="country37">Nepal</label></li>
    <li><input type="radio" name="countryId" id="country53"><label for="country53">Lithuania</label></li>
    <li><input type="radio" name="countryId" id="country51"><label for="country51">Latvia</label></li>
    <li><input type="radio" name="countryId" id="country25"><label for="country25">Kazakhstan</label></li>
    <li><input type="radio" name="countryId" id="country9"><label for="country9">Kyrgyzstan</label></li>
    <li><input type="radio" name="countryId" id="country27"><label for="country27">Moldova</label></li>
    <li><input type="radio" name="countryId" id="country32"><label for="country32">USA via Caribbean</label></li>
    <li><input type="radio" name="countryId" id="country39"><label for="country39">Czech Republic</label></li>
    <li><input type="radio" name="countryId" id="country58"><label for="country58">Albaina</label></li>
    <li><input type="radio" name="countryId" id="country47"><label for="country47">Hungary</label></li>
    <li><input type="radio" name="countryId" id="country43"><label for="country43">Mauritius</label></li>
    <li><input type="radio" name="countryId" id="country3"><label for="country3">Ukraine</label></li>
    <li><input type="radio" name="countryId" id="country6"><label for="country6">Germany</label></li>
    <li><input type="radio" name="countryId" id="country8"><label for="country8">Spain</label></li>
    <li><input type="radio" name="countryId" id="country16"><label for="country16">Philippines</label></li>
    <li><input type="radio" name="countryId" id="country19"><label for="country19">India</label></li>
    <li><input type="radio" name="countryId" id="country40"><label for="country40">Malaysia</label></li>
    <li><input type="radio" name="countryId" id="country41"><label for="country41">Armenia</label></li>
    <li><input type="radio" name="countryId" id="country57"><label for="country57">Bosnia</label></li>
    <li><input type="radio" name="countryId" id="country67"><label for="country67">England</label></li>
    </ul>
    
    </div>
    </li>
    <li>
    <a class="uk-accordion-title" href="#">Universal Type</a>
    <div class="uk-accordion-content">
    <ul class="styled-checkbox">
    <li><input type="radio" name="public" id="public"><label for="public">public</label></li>
    <li><input type="radio" name="Private" id="Private"><label for="Private">Private</label></li>
    </ul>
    </div>
    </li>
    
    <li>
    <a class="uk-accordion-title" href="#">Rating</a>
    <div class="uk-accordion-content">
    <ul class="styled-checkbox">
    <li><input type="radio" name="1" id="1"><label for="1">
    <i class="fa fa-star"></i></label></li>
    
    <li><input type="radio" name="2" id="2"><label for="2">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </label>
    </li>
    
    <li><input type="radio" name="3" id="3"><label for="3">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </label>
    </li>
    
    <li><input type="radio" name="4" id="4"><label for="4">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </label>
    </li>
    
    <li><input type="radio" name="5" id="5"><label for="5">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </label>
    </li>
    
    
    
    </ul>
    </div>
    </li>
    
    
    
    </ul>
    </div>
    </div>
    
    <div class="col-md-9">
    

        @if (count($university_list) > 0)
            @foreach ($university_list as $mylist)
    <div class="full_box">
    <div class="full_boxs">
    <a href="{{ url('details/'. getParentCountrySlugById($mylist->country_id). '/' .$mylist->uni_slug) }}">
    <div class="full_img">
    <img src="{{ asset('storage/uploads/university/'. $mylist->uni_thumb_image) }}">
    </div>
    <div class="public">
    <p> Public </p>
    </div>
    <div class="uni_logo">
    <img src="{{ asset('storage/uploads/university/'. $mylist->uni_logo) }}">
    </div>
    <div class="uni_rating star-4 "></div>
    </a>
    </div>
    <div class="uni_contnt">
    <div class="university_space">
    <h2><a href="{{ url('details/'. getParentCountrySlugById($mylist->country_id). '/' .$mylist->uni_slug) }}" title="Dalian Medical University"> {{$mylist->uni_name}} </a></h2>
    <ul class="border-list border-bottom pb-1">
    <li><span class="fw-600"> Country : </span><strong > {{getParentCountryById($mylist->country_id)}}</strong></li>
    <li><span class="fw-600">Degree : </span><strong > Bachelor</strong></li>
    <li><span class="fw-600">Course : </span><strong > Medicine </strong></li>
    </ul>
    
    <div class="university_details">
    <div class="data_card_left">
    
    <div class="data_card">
    <div class="data_heading">  University Type  </div>
    <div class="data_content">  Public  </div>
    </div>
    
    <div class="data_card">
    <div class="data_heading">   University Grade   </div>
    <div class="data_content">  A  </div>
    </div>
    
    <div class="data_card">
    <div class="data_heading">   Estd. Year   </div>
    <div class="data_content">  1947  </div>
    </div>
    
    <div class="data_card">
    <div class="data_heading">   ECFMG Status   </div>
    <div class="data_content">  Approved  </div>
    </div>
    
    <div class="data_card">
    <div class="data_heading">  Course Fee  </div>
    <div class="data_content">    ₹39.77 Lacs    </div>
    </div>
    
    </div>
    
    <div class="data_card-right">
    <div class="data_card">
    <div class="data_heading">  University Type  </div>
    <div class="data_content">  Public  </div>
    </div>
    
    <div class="data_card">
    <div class="data_heading">   University Grade   </div>
    <div class="data_content">  A  </div>
    </div>
    
    <div class="data_card">
    <div class="data_heading">   Estd. Year   </div>
    <div class="data_content">  1947  </div>
    </div>
    
    <div class="data_card">
    <div class="data_heading">   ECFMG Status   </div>
    <div class="data_content">  Approved  </div>
    </div>
    
    <div class="data_card">
    <div class="data_heading">  Course Fee  </div>
    <div class="data_content">    ₹39.77 Lacs    </div>
    </div>
    </div>
    </div>
    <div class="uni_btn">
    <a href="#" class="uni_btn_css">  Download Brochure </a>
    <a href="#" class="uni_btn_css">  Apply Now </a>
    <a href="{{ url('details/'. getParentCountrySlugById($mylist->country_id). '/' .$mylist->uni_slug) }}" class="uni_btn_css">  About University </a>
    </div>
    </div>
    </div>
    </div>
    @endforeach

    @else
    <h4>No Data Found..</h4>
    @endif
    
    
    </div>
    
    </div>
    </div>
    </section>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>
@endsection

