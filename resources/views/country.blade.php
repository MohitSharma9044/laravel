    @extends('layouts.layout')
    @section('title', $country['country_name'])
    @section('content')


    <section>
        <div class="position-relative">
        <div class="fixed-bgd">
        <img src="{{ asset('front_assets/img/broad/melbourne.jpg') }}">
        </div>
        <div class="university_name">
        @if ($country['country_name'] != '')
        <h1> Study In {{ $country['country_name'] }}</h1>
        @endif
        </div>
        </div>
    </section>

    <section id="secondaryNavBar" class="sticky_section">
        <div class="container">
        <ul>
        <li class="active"><a> FAST FACTS</a></li>
        <li class=""><a href="#top_university"> TOP UNIVERSITIES</a></li>
        <li class=""><a href="#admissions"> ADMISSIONS</a></li>
        <li class=""><a href="#scholarship"> SCHOLARSHIPS</a></li>
        <li class=""><a href="#visa"> VISA</a></li>
        <li class=""><a> COST OF LIVING</a></li>
        <li class=""><a href="#work_opportunities"> WORK OPPORTUNITIES</a></li>
        <li class=""><a href="#faq"> FAQs</a></li>
        </ul>
        </div>
    </section>

    @if (count($country['country_facts']) > 0 && count($country['country_university']) > 0 && count($country['country_admissions']) > 0 && count($country['country_scholar']) > 0 && count($country['country_visa']) > 0 )
        
  

    <section id="fastFacts" class="study-location-facts_fastFacts__2PtGC">
        <div class="container">
        <div class="row">
        <div class="col-sm-12 mobile-hide">
        <div class="row">
    
        @if ($country['country_facts'] != '')
        @if (count($country['country_facts']) > 0)
        @foreach ($country['country_facts'] as $facts)
        <div class="col-sm-3 mb-3">
        <div class="study-location-facts_capital__1MYWF">
        <div class="study-location-facts_imgBox__3psUR">
        @if ($facts['fact_image'] != '')
        <img src="{{ asset('storage/uploads/facts/'. $facts['fact_image']) }}"></div>
        @endif
        <div class="study-location-facts_imgDetails__3qjdN">
        @if ($facts['fact_title'] != '')
        <p>{{ $facts['fact_title'] }}<br><strong>{{ $facts['fact_content'] }}</strong></p>
        @endif
        </div>
        </div>
        </div>
        @endforeach     
        @endif
        @endif
        </div>
        </div>
    
    
        <div class="col-sm-12">
    
        <div class="study-location-facts_studyGuide__isgq9 mobile-hide">
        <div class="textC ">
        <p style="margin-bottom: 0px;">Download your USA Free Guide</p>
        </div>
        <a id="button"><img src="https://images.leverageedu.com/assets/img/icon.png"></a>
        </div>
    
        </div>
        </div>
        </div>
    </section>

    {{-- Top University Starts --}}
    <div class="Listing_d uni" id="top_university">
        <div class="container">
        <div class="row">
    
        <div class="Unive">
        <h3> Top Universities </h3>
        </div>
    
    
        <div class="university_slider owl-carousel owl-theme">
        @if ($country['country_university'] != '')
    
    
        @if (count($country['country_university']) > 0)
        @foreach ($country['country_university']  as $university)
        <div class="item">
        <div id="ctp_tuple_0">
        <div class="shadowCard ctpCard undefined">
        <div class="headSec">
        <a class="ripple dark" href="{{ url('details/'. getParentCountrySlugById($university['country_id']). '/' .$university['uni_slug']) }}"></a>
        <div class="background-style"></div>
        <div class="flexRow opecLyr">
        <div class="imgBox">
        <a href="{{ url('details/'. getParentCountrySlugById($university['country_id']). '/' .$university['uni_slug']) }}">
        @if ($university['uni_thumb_image'] != '')
        <img src="{{ asset('storage/uploads/university/'. $university['uni_thumb_image']) }}" alt="{{$university['uni_name']}}" height="62" width="83">
        @endif
        </a></div>
        <div class="instBox">
        <div class="flexRowSpaceBtwn">
        <div class="elipsysBox">
        @if ($university['uni_name'] != '')
        <strong class="instNamev2"><a href="{{ url('details/'. getParentCountrySlugById($university['country_id']). '/' .$university['uni_slug']) }}">{{ $university['uni_name'] }}</a></strong>
        @endif
        @if ($university['uni_location'] != '')
        <span class="instLoc"><i class="ctpSprite ctpv2-loc"></i>{{ $university['uni_location'] }}</span>
        @endif
        </div>
        </div>
    
        <div class="keyInfo">
        <p class="keyInfo_txt">
        <a class="vw-adLnkv2 ripple dark" href="the-university-of-melbourne.php">Admission 22</a>
        <a class="vw-adLnkv2 ripple dark" href="the-university-of-melbourne.php">Placement</a>
        <a class="vw-adLnkv2 ripple dark" href="the-university-of-melbourne.php">Cutoff</a>
        </p>
        </div>
    
        </div>
        </div>
        </div>
        <div class="contSec ">
        <div class="flexRowEqual">
        <div>
        <label class="blockLabel"><span class="truncateTxt">Selected <ev> Courses</ev></span></label>
    
        @if ($university->unversity_courses != '')
        <div class="valueTxt">
        <a class="ripple dark" href="#">{{count($university->unversity_courses)}} Courses</a><label class="inlineLabel">&nbsp;(781+ Seats)</label>
        </div>                
        @endif
    
        </div>
        <div><label class="blockLabel truncateTxt">Exams</label>
        <div class="valueTxt">
        <div class="exams-flex">???</div>
        </div>
        </div>
        </div>
        <div class="flexRowEqual">
        <div><label class="blockLabel">Value of Money Rating</label>
        <div class="valueTxt"><span class="ctpv2-rating"><strong>4.7<i class="empty_stars starBg rvw-lyr"><i class="full_starts starBg rvw-lyr" style="width:94%"></i></i></strong></span></div>
        </div>
        <div><label class="blockLabel">Placement Rating</label>
        <div class="valueTxt"><span class="ctpv2-rating"><strong>4.4<i class="empty_stars starBg rvw-lyr"><i class="full_starts starBg rvw-lyr" style="width:88%"></i></i></strong></span></div>
        </div>
        </div>
        <div class="flexRowEqual">
        <div><label class="blockLabel">Course Rating</label>
        <div class="valueTxt"><a class="ratingCount_link ripple dark" href="/college/shri-ram-college-of-commerce-university-of-delhi-maurice-nagar-23930/reviews"><span class="ctpv2-rating"><strong>4.5<i class="empty_stars starBg rvw-lyr"><i class="full_starts starBg rvw-lyr" style="width:90%"></i></i></strong></span>416</a></div>
        </div>
        <div><label class="blockLabel">Ranked</label>
        <div class="valueTxt">???</div>
        </div>
        </div>
        </div>
        <div class="btnSec flexRowSpaceBtwn btnWidth">
        <div class="tupleCta"><button type="button" name="button" data-type="button" class="button button--secondary rippleefect">Apply Now</button>
        <button type="button" onclick="downloadBrochure('{{ asset('storage/uploads/university/'.$university['uni_brochure']) }}');" id="brchr_53143" class="ctp-btn ctpBro-btn rippleefect button button--orange tupleBrochureButton brchr_53143"
        ><i></i>Brochure</button></div><span class="course--shrtlst shortlistStar" style="float:left"><i id="shrt_53143" class="pwa-shrtlst-ico tupleShortlistButton shrt_53143"></i> </span></div>
        <div
        class="msgSec"></div>
        </div>
        </div>
        </div>
        @endforeach
        @endif 
        @endif
    
    
        </div>
    
    
        </div>
        </div>
        </div>
    {{-- Top University Ends --}}

    {{-- Admission Starts --}}
    <section class="admission_sc" id="admissions">
        <div class="container">
        <div class="row">
        <div class="Unive">
        <h3> Admission Requirements </h3>
        @if (count($country['country_admissions']) > 0)
        @if ($country['country_admissions'][0]->admission_para != '')
        <p>{{ $country['country_admissions'][0]->admission_para }}</p>
        @endif
        @endif
    
        </div>
        </div>
    
        <div class="row">
        <div class="mobile-hide">
        <div class="row">
        <ul>
        @if ($country['country_admissions'] != '')
    
    
        @if (count($country['country_admissions']) > 0)
        @foreach ($country['country_admissions'] as $admission)
        <li>
        <div class="Sm_box">
        @if ($admission->admission_image != '')
        <img class="logo__3sxIh" src="{{ asset('storage/uploads/admission/'.$admission->admission_image) }}" alt="{{ $admission->admission_title }}">
        @endif
        <div class="siQ9U">
        @if ($admission->admission_title != '')
        <div class="logo__24sa1">{{ $admission->admission_title }}</div>
        @endif
        </div>
        </div>
        </li>
        @endforeach
        @endif
        @endif
    
        </ul>
        </div>
        </div>
        </div>
    
        </div>
        </section>
    {{-- Admission Ends --}}

    {{-- Get Query Starts --}}
    <section>
        <div class="w-100 thm-bg position-relative">
        <div class="find-thera-wrap position-relative w-100">
        <div class="row align-items-center mrg">
        <div class="col-md-12 col-sm-12 col-lg-6">
        <div class="find-thera-img position-relative"><img class="img-fluid w-100" src="{{ asset('front_assets/img/find-thera-img.jpg') }}" alt="Find Therapist Image"></div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6">
        <div class="find-thera-cap position-relative">
        <a class="video-play spinner text-center rounded-circle position-absolute" href="https://player.vimeo.com/video/25969077" data-fancybox title=""><i class="flaticon-play"></i></a>
        <div class="find-thera-cap-inner">
        <h2 class="mb-0">Get your Dream PTE or IELTS Score with Career Clinic Live Classes</h2>
        <p>Learn from the Best Tutors</p>
        <div class="btns-group d-inline-flex flex-wrap align-items-center w-100">
        <a class="thm-btn v2 scndry-bg brd-rd5 d-inline-block position-relative overflow-hidden" href="javascript:void(0);" title="">Book Your free Demo</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
    {{-- Get Query Ends --}}

    
    <div class="our-specification" id="scholarship">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
        <div class="about-us-short-sec  " data-style="style1">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="about-us-classic">
    
        <div class="about-us-short">
        @if (count($country['country_scholar']) > 0)
    
    
        @if ($country['country_scholar'][0]->scholar_title != '')
        <h1>{{ $country['country_scholar'][0]->scholar_title }} </h1>  
        @endif
        @if ($country['country_scholar'][0]->scholar_image != '')
        <img src="{{ asset('storage/uploads/scholar/'.$country['country_scholar'][0]->scholar_image) }}" class="sch" alt="{{ $country['country_scholar'][0]->scholar_title }}">
        @endif
        @if ($country['country_scholar'][0]->scholar_desc != '')
        {!! $country['country_scholar'][0]->scholar_desc !!}
        @endif
        @endif
        </div>  
        </div>          
        </div>
        </div>  
        </div>  
        </div>  
        </div></div></div></div>

        {{-- Visa Section Starts Here --}}
        
    <section id="visa">
        <div class="w-100 scndry-layer opc98 position-relative">
        <div class="fixed-bg patern-bg" style="background-image: url('{{ asset('front_assets/img/pattern-bg1.jpg') }}');"></div>
        <div class="testi-storie-wrap w-100">
        <div class="row mrg">
        <div class="col-md-12 col-sm-12 col-lg-6">
        <div class="testi-wrap d-flex flex-wrap justify-content-center align-items-center position-relative w-100">
        <div class="Unive">
        <h3> Visa Options </h3>
        </div>
    
        <div class="testi-inner d-inline-block w-100">
        <div class="testi-list-caro">
        @if ($country['country_visa'] != '')
    
    
        @if (count($country['country_visa']) > 0)
        @foreach ($country['country_visa'] as $visa)
        <div class="testi-item-wrap d-block w-100">
        <div class="testi-item-box position-relative brd-rd10 w-100">
        <div class="testi-item-top d-flex flex-wrap align-items-center justify-content-between w-100">
        <div class="testi-item-info">
        @if ($visa->visa_title != '')
        <h4 class="mb-0">{{ $visa->visa_title }}</h4>
        @endif
        @if ($visa->visa_cost != '')
        <span class="d-block thm-clr">Cost - {{ $visa->visa_cost }}</span>
        @endif
        </div>
        <span class="rate d-inline-block thm-clr">
        @if ($visa->visa_rating != '')
        @for ($i=0; $i<5;$i++)
        @if ($i < floor($visa->visa_rating))
        <i class="fas fa-star"></i>
        @elseif ($i == floor($visa->visa_rating) && $visa->visa_rating != floor($visa->visa_rating))
        <i class="fas fa-star-half-alt"></i>
        @else
        <i class="far fa-star"></i>
        @endif
        @endfor
        @endif
        </span>
        </div>
        @if ($visa->visa_type != '')
        <p class="type">Type- {{ $visa->visa_type }}</p>
        @endif
        @if ($visa->visa_short_desc != '')
        <p class="mb-0">{{ $visa->visa_short_desc }}</p>  
        @endif
        </div>
        </div>      
        @endforeach
        @endif
        @endif
    
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6">
        <div class="storie-wrap text-center d-flex flex-wrap justify-content-center align-items-center overflow-hidden position-relative w-100" style="background-image: url('{{ asset('front_assets/img/story-bg.jpg') }}');">
        <div class="storie-inner d-inline-block w-100">
        <div class="Unive">
        <h3> Weather </h3>
        </div>
        <div class="row">
        <div class="col-sm-6 text-right"><span class="mr-2">Min</span> <span class="mr-3">Max</span></div>
        <div class="col-sm-6 text-right mobile-hide"><span class="mr-2">Min</span> <span class="mr-3">Max</span></div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">London</div>
        <div class="float-right"><span class="celc">5<sup>o</sup></span><span class="fahren">9<sup>o</sup></span></div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">Edinburgh</div>
        <div class="float-right"><span class="celc">1<sup>o</sup></span><span class="fahren">7<sup>o</sup></span></div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">Manchester</div>
        <div class="float-right"><span class="celc">4<sup>o</sup></span><span class="fahren">8<sup>o</sup></span></div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">Glasgow</div>
        <div class="float-right"><span class="celc">3<sup>o</sup></span><span class="fahren">7<sup>o</sup></span></div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">Coventry</div>
        <div class="float-right"><span class="celc">3<sup>o</sup></span><span class="fahren">7<sup>o</sup></span></div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">Nottingham</div>
        <div class="float-right"><span class="celc">2<sup>o</sup></span><span class="fahren">8<sup>o</sup></span></div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">Birmingham</div>
        <div class="float-right"><span class="celc">2<sup>o</sup></span><span class="fahren">8<sup>o</sup></span></div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">New Castle</div>
        <div class="float-right"><span class="celc">-1<sup>o</sup></span><span class="fahren">8<sup>o</sup></span></div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">Aberdeen</div>
        <div class="float-right"><span class="celc">1<sup>o</sup></span><span class="fahren">7<sup>o</sup></span></div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="temp__list clearfix">
        <div class="float-left">Brighton</div>
        <div class="float-right"><span class="celc">5<sup>o</sup></span><span class="fahren">8<sup>o</sup></span></div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        {{-- Visa Section Ends Here --}}

        {{-- Work Opportunity Starts --}}
        <section class="career_oppo" id="work_opportunities">
            <div class="w-100 position-relative">
            <div class="get-time-method-wrap position-relative w-100">
                @if (count($country['country_work_opportunity']) > 0)
            <div class="row mrg">
            <div class="col-md-12 col-sm-12 col-lg-6">
            <div class="get-time-wrap d-flex flex-wrap justify-content-center align-items-center position-relative bg-color5 w-100">
            <div class="get-time-inner d-inline-block w-100">
            <div class="sec-title v2 w-100">
            <div class="sec-title-inner">
            @if (count($country['country_work_opportunity']) > 0)
        
        
            @if (count($country['country_work_opportunity']) > 0)
            @php
            $work_details = getWorkExtraDetailsById($country['country_work_opportunity'][0]->id);
            @endphp
            @endif
            @if ($country['country_work_opportunity'][0]->title != '')
            <h2 class="mb-0">{{ $country['country_work_opportunity'][0]->title }}</h2>
            @endif
            @if ($country['country_work_opportunity'][0]->content != '')
            <p class="mb-0">{{ $country['country_work_opportunity'][0]->content }}</p>   
            @endif
            @endif
            </div>
            </div>
            @if (count($country['country_work_opportunity']) > 0)
            @if ($country['country_work_opportunity'][0]->part_title != '')
            <div class="get-time-box brd-rd10 bg-color6 w-100">
            <h3>{{$country['country_work_opportunity'][0]->part_title}}</h3>
            <p>{{$country['country_work_opportunity'][0]->part_content}}</p>
            </div>
            @endif
            @if ($country['country_work_opportunity'][0]->study_title != '')
            <div class="get-time-box brd-rd10 bg-color6 w-100">
            <h3>{{$country['country_work_opportunity'][0]->study_title}}</h3>
            <p>{{$country['country_work_opportunity'][0]->study_content}}</p>
            </div>
            @endif
            @endif
        
            </div>
            </div>
            </div>
        
        
            <div class="col-md-12 col-sm-12 col-lg-6">
            <div class="method-apply-wrap gray-layer opc95 d-flex flex-wrap justify-content-center align-items-center position-relative w-100">
            <div class="method-apply-inner d-inline-block w-100">
            <div class="methods-wrap d-inline-block w-100">
            <div class="row">
            @if ($work_details != '')
            @if (count($work_details) > 0)
            @foreach ($work_details as $works)
            <div class="col-md-6 col-sm-6 col-lg-6">
            <div class="method-box d-flex flex-wrap align-items-start w-100">
            @if ($works->work_image != '')
            <img src="{{ asset('storage/uploads/works/'.$works->work_image) }}" alt="{{ $works->work_title }}">
            @endif
        
            <div class="method-box-inner">
            @if ($works->work_title != '')
            <h4 class="mb-0">{{ $works->work_title }}</h4>
            @endif
            </div>
            </div>
            </div>       
            @endforeach  
            @endif
            @endif
            </div>
            </div>
            </div>
            </div>
            </div>



            </div>

            @endif
            </div>
            </div>
            </div>
            </section>
        {{-- Work Opportunity Ends --}}

        <section class="sLARSection" style="background-color: rgb(232, 244, 253); position: relative;">
            <div class="container">
            @if (count($country['country_work_opportunity']) > 0)
        
        
            @if ($country['country_work_opportunity'][0]->study_title2 != '')
            <h2> {{$country['country_work_opportunity'][0]->study_title2}} </h2>
            @endif
            @if ($country['country_work_opportunity'][0]->study_content2 != '')
            {!!$country['country_work_opportunity'][0]->study_content2!!}
            @endif
            @endif
            </div>
            </section>

            <section class="faq-section" id="faq" >
                <div class="container">
                <div class="row clearfix">
                <div class="accordian-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                <div class="sec-title style-four">
                <div class="separater"></div>
                <h2>You Can Learn More From <br> Our Asked Questions</h2>
                </div>						
                <div class="accordion" id="accordionExample">
                @if (count($country['country_faqs']) > 0)
            
            
                @if (count($country['country_faqs']) > 0)
                @foreach ($country['country_faqs'] as $key => $faqs)
            
                <div class="card">
                <div class="card-header @if($key < 1) {{ 'collapsed' }} @endif" data-toggle="collapse" data-target="#collapse-{{$key}}" aria-expanded="true">     
                @if ($faqs->faqs_title != '')
                <span class="title"> {{ $faqs->faqs_title }} </span>
                @endif
            
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                </div>
                <div id="collapse-{{$key}}" class="collapse @if($key < 1) {{ 'show' }} @endif" data-parent="#accordionExample">
                <div class="card-body">
                @if ($faqs->faqs_desc != '')
                {{ $faqs->faqs_desc }}
                @endif
            
                </div>
                </div>
                </div>
            
                @endforeach
            
                @endif
                @endif
                </div>
                </div>
                </div>
            
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                <div class="image">
                <img src="{{ asset('front_assets/img/faq-1-1-1.png') }}" alt="Faqs Image">
                </div>
                </div>
                </div>
            
                </div>
                </div>
                </section>

                @else
                <section style="padding:80px 0;">
<div class="container">
    <div class="row">
        <h4 class="text-center my-5 py-4" >No Data Found..</h4>
    </div>
</div>
</section>             

                @endif
    @endsection

    @section('script')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script>
    // University Slider
    $('.university_slider').owlCarousel({
    loop:true,
    nav:true,
    dots:true,
    autoplay:false,
    responsive:{
    0:{
    items:1
    },
    600:{
    items:1
    },
    1000:{
    items:3
    }
    }
    });


    function downloadBrochure(uni_brochure)
    {
    if(uni_brochure != '')
    {
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $.ajax({
    url:"{{ route('download-brouchure') }}",
    method:"POST",
    data:{uni_brochure:uni_brochure},
    success: function(response) {
    var blob = new Blob([response]);
    var link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'file.pdf';
    link.click();
    }
    });
    }
    }
    </script>
    @endsection

