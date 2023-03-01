@extends('layouts.layout')
@section('title', $university_details['uni_name'])


@section('content')
<div class="Main_s">
    <div class="container">
    <div class="row_s">
        @if ($university_details['uni_banner'] != '')
        <div class="_8c62">
            <div class="header-bgcol" style="background-image:url('{{ asset('storage/uploads/university/'.$university_details['uni_banner']) }}');"></div>
            </div>
        @endif
    
    
    <div class="pwa-headerwrapper">
    <div class="pwa_topwidget">
        @if ($university_details['uni_logo'] != '')
    <div class="header_img">
    <img src="{{ asset('storage/uploads/university/'.$university_details['uni_logo']) }}" alt="{{$university_details['uni_name']}}">
    </div>
    @endif
    <div class="clg_dtlswidget">
    <h1> {{$university_details['uni_name']}} </h1>
    </div>
    
    <div class="rank-widget">
    <div class="rank-widgets">
    <ul class="aggregate_rating">
        @if ($university_details['uni_mobiles'] != '')
        <li><i class="fa fa-phone"></i> {{$university_details['uni_mobiles']}} </li>
        @endif
        @if ($university_details['uni_emails'] != '')
    <li><i class="fa fa-envelope"></i> {{$university_details['uni_emails']}} </li>
    @endif
    </ul>
    
    <div class="CSS_c">
    <button type="button" name="button" data-type="button" class="button button--secondary rippleefect">Apply Now</button>
    
    <button type="button"><i class="fa fa-download" aria-hidden="true"></i>Brochure</button>
    
    </div>
    </div>
    
    
    </div>
    </div>
    
    </div>
    </div>
    </div>
    
    
    <section class="second_point">
    <div class="container">
    <div class="row">
    <div class="col-md-8">
    <div class="card pmd-card">
    
    <div class="pmd-tabs border-bottom pmd-tabs-scroll" scroll="true">
                    <!-- Tab Listing -->
    <div class="pmd-tabs-scroll-container">
     <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#about_area">About University</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#course_area">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#college_area">Affiliated Colleges</a>
        </li>
        
      </ul>
    
    </div>
    
    
      <!-- Tab panes -->
      <div class="tab-content">
        <div id="about_area" class="container tab-pane active">
          <div class="card-body">
            @if ($university_details['uni_description'] != '')
          {!! $university_details['uni_description'] !!}
          @endif

          @if ($university_details['uni_program_title'] != '')
    <h3> {{$university_details['uni_program_title']}} </h3>
        @endif
    <ol>
@if (count($university_details['unversity_programs']) > 0)
        @foreach ($university_details['unversity_programs'] as $programs)
        <li> {{$programs->uni_program_points}} </li> 
        @endforeach
    
@endif
    </ol>
    
    
    
    
          </div>
        </div>
        <div id="course_area" class="container tab-pane fade">
          <div class="card-body">
            @if ($university_details['uni_course_heading'] != '')
                <h3>{{$university_details['uni_course_heading']}}</h3>
            @endif

            @if (count($university_details['unversity_courses']) > 0)
                @foreach ($university_details['unversity_courses'] as $courses)
                    <div>
                    <h5> {{$courses->uni_course_title}} </h5>
                    @php
                        $cpPointsData = getUniversityCoursePointListById($courses->id);
                    @endphp
                    @if (count($cpPointsData) > 0)
                        @foreach ($cpPointsData as $course_points)
                            @php
                                $courseData = getMainCourseById($course_points['uni_course']);
                            @endphp
                            @if ($courseData['course_name'] != '')
                                    <div class="cir_course">
                                        <p> {{$courseData['course_name']}} </p>
                                        <span>{{$courseData['course_year']}}</span>
                                    </div>
                            @endif
                        @endforeach
                    @endif
                </div>
                @endforeach
            @endif
          
          
          
          </div>
        </div>
        <div id="college_area" class="container tab-pane fade">
          <div class="card-body">
            @if ($university_details['uni_college_heading'] != '')
                <h3>{{$university_details['uni_college_heading']}}</h3>
            @endif
            @if (count($university_details['unversity_colleges']) > 0)
                @foreach ($university_details['unversity_colleges'] as $colleges)
                    <div>
                        <h5> {{$colleges->uni_college_city}} </h5>
                        <ul>
                            @php
                                $collegePoints = getUniversityCollegePointListById($colleges->id);
                            @endphp
                            @if (count($collegePoints) > 0)
                                @foreach ($collegePoints as $points)
                                <li> {{$points->uni_college_points}} </li>
                                @endforeach
                            @endif
                            
                        </ul>
                    </div>
                @endforeach
            @endif
           
          
          </div>
        </div>
      </div>
    
    
    
    
    
    
                      </div>
    </div>
    
    </div>
    
    <div class="col-md-4">
    <div class="side_bar">
    <div class="side_bars">
    <h3>Courses you may be interested in</h3>
    
    <ul>
        @if (count($course_list) > 0)
            @foreach ($course_list as $mycourse)
                <li><a href="{{ url('course/'.$mycourse->course_slug) }}">{{$mycourse->course_name}}</a></li>
            @endforeach
        @endif
    
    {{-- <li><a href="#">M.Sc. (Master of Science)</a></li>
    <li><a href="#">MBA (Masters of Business Administration)</a></li>
    <li><a href="#">M.Des</a></li>
    <li><a href="#">M.E./M.Tech</a></li>
    <li><a href="#">B Des (Bachelor of Design)</a></li>
    <li><a href="#">B Tech (Bachelor of Technology)</a></li>
    <li><a href="#">Executive MBA</a></li>
    <li><a href="#">Ph.D.</a></li>
    <li><a href="#">Engineering</a></li>
    <li><a href="#">Science</a></li>
    <li><a href="#">Business & Management Studies</a></li>
    <li><a href="#">Humanities & Social Sciences</a></li>
    <li><a href="#">Design</a></li>
    <li><a href="#">Computer Courses (IT & Software)</a></li> --}}
    </ul>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </section>

@endsection

@section('script')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
@endsection

