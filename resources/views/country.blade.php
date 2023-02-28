@extends('layouts.layout')
@section('title', 'Finance')


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
    
    
    <section id="fastFacts" class="study-location-facts_fastFacts__2PtGC">
    <div class="container">
    <div class="row">
    <div class="col-sm-12 mobile-hide">
    <div class="row">

        @if (count($country['country_facts']) > 0)
            @foreach ($country['country_facts'] as $facts)
    <div class="col-sm-3 mb-3">
    <div class="study-location-facts_capital__1MYWF">
    <div class="study-location-facts_imgBox__3psUR">
    <img src="{{ asset('storage/uploads/facts/'. $facts['fact_image']) }}"></div>
    <div class="study-location-facts_imgDetails__3qjdN">
    <p>{{ $facts['fact_title'] }}<br><strong>{{ $facts['fact_content'] }}</strong></p>
    </div>
    </div>
    </div>
    @endforeach     
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
    
    
    <!------------------------------->
    
    <div class="Listing_d uni" id="top_university">
    <div class="container">
    <div class="row">
    
    <div class="Unive">
    <h3> Top Universities </h3>
    </div>
    
    
    <div class="university_slider owl-carousel owl-theme">

        @if (count($country['country_university']) > 0)
            @foreach ($country['country_university']  as $university)
    <div class="item">
    <div id="ctp_tuple_0">
    <div class="shadowCard ctpCard undefined">
    <div class="headSec">
    <a class="ripple dark" href="the-university-of-melbourne.php"></a>
    <div class="background-style"></div>
    <div class="flexRow opecLyr">
    <div class="imgBox">
    <a href="the-university-of-melbourne.php">
        @if ($university[''])
            
        @endif
    <img src="../img/broad/college_609_20-15_00_mel-Cover.jpeg" height="62" width="83">
    </a></div>
    <div class="instBox">
    <div class="flexRowSpaceBtwn">
    <div class="elipsysBox">
    <strong class="instNamev2"><a href="the-university-of-melbourne.php">The university of melbourne, melbourne</a></strong>
    <span class="instLoc"><i class="ctpSprite ctpv2-loc"></i>Victoria, australia</span>
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
    <div class="valueTxt">
    <a class="ripple dark" href="#">5 Courses</a><label class="inlineLabel">&nbsp;(<!-- -->781+ Seats<!-- -->)</label></div>
    </div>
    <div><label class="blockLabel truncateTxt">Exams</label>
    <div class="valueTxt">
    <div class="exams-flex">─</div>
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
    <div class="valueTxt">─</div>
    </div>
    </div>
    </div>
    <div class="btnSec flexRowSpaceBtwn btnWidth">
    <div class="tupleCta"><button type="button" name="button" data-type="button" class="button button--secondary rippleefect">Apply Now</button><button type="button" name="button" id="brchr_53143" class="ctp-btn ctpBro-btn rippleefect button button--orange tupleBrochureButton brchr_53143"
    data-courseid="53143" data-trackid="213" cta-type="download_brochure"><i></i>Brochure</button></div><span class="course--shrtlst shortlistStar" style="float:left"><i id="shrt_53143" class="pwa-shrtlst-ico tupleShortlistButton shrt_53143" data-courseid="53143" data-trackid="215"></i> </span></div>
    <div
    class="msgSec"></div>
    </div>
    </div>
    </div>
    @endforeach
            
    @endif 

    
        
    </div>
    
    
    </div>
    </div>
    </div>
    
    <!------------------------------->
    
    <!----------------Admission Section--------------->
    <section class="admission_sc" id="admissions">
    <div class="container">
    <div class="row">
    <div class="Unive">
    <h3> Admission Requirements </h3>
    <p>Here are the major requirements to study in UK which you need to ensure while applying to a UK university:</p>
    </div>
    </div>
    
    <div class="row">
    <div class="mobile-hide">
    <div class="row">
    <ul>
    <li>
    <div class="Sm_box">
    <img class="logo__3sxIh" src="https://images.leverageedu.com/assets/img/study-locations/admission-requirements/passport.png">
    <div class="siQ9U">
    <div class="logo__24sa1">Copy of a valid passport</div>
    </div>
    </div>
    </li>
    
    <li>
    <div class="Sm_box"><img class="logo__3sxIh" src="https://images.leverageedu.com/assets/img/study-locations/admission-requirements/advancedScore.png">
    <div class="siQ9U">
    <div class="logo__24sa1">TOEFL/IELTS/C1 Advanced scores</div>
    </div>
    </div>
    </li>
    
    <li>
    <div class="Sm_box"><img class="logo__3sxIh" src="https://images.leverageedu.com/assets/img/study-locations/admission-requirements/PGProgram.png">
    <div class="siQ9U">
    <div class="logo__24sa1">GMAT/GRE scores for PG programs</div>
    </div>
    </div>
    </li>
    
    
    <li>
    <div class="Sm_box"><img class="logo__3sxIh" src="https://images.leverageedu.com/assets/img/study-locations/admission-requirements/transcripts.png">
    <div class="siQ9U">
    <div class="logo__24sa1">Academic Transcripts</div>
    </div>
    </div>
    </li>
    
    
    <li>
    <div class="Sm_box"><img class="logo__3sxIh" src="https://images.leverageedu.com/assets/img/study-locations/admission-requirements/LOR.png">
    <div class="siQ9U">
    <div class="logo__24sa1">Letter of Recommendations (LORs)</div>
    </div>
    </div>
    </li>
    
    
    <li>
    <div class="Sm_box"><img class="logo__3sxIh" src="https://images.leverageedu.com/assets/img/study-locations/admission-requirements/Portfolio.png">
    <div class="siQ9U">
    <div class="logo__24sa1">Portfolio (for specific courses)</div>
    </div>
    </div>
    </li>
    
    <li>
    <div class="Sm_box"><img class="logo__3sxIh" src="https://images.leverageedu.com/assets/img/study-locations/admission-requirements/cv.png">
    <div class="siQ9U">
    <div class="logo__24sa1">A CV (if applicable)</div>
    </div>
    </div>
    </li>
    
    
    <li>
    <div class="Sm_box"><img class="logo__3sxIh" src="https://images.leverageedu.com/assets/img/study-locations/admission-requirements/sop.png">
    <div class="siQ9U">
    <div class="logo__24sa1">Statement of Purpose (SOP)</div>
    </div>
    </div>
    </li>
    
    </ul>
    </div>
    </div>
    </div>
    
    </div>
    </section>
    <!----------------Admission Section--------------->
    
    
    <section>
    <div class="w-100 thm-bg position-relative">
    <div class="find-thera-wrap position-relative w-100">
    <div class="row align-items-center mrg">
    <div class="col-md-12 col-sm-12 col-lg-6">
    <div class="find-thera-img position-relative"><img class="img-fluid w-100" src="../img/find-thera-img.jpg" alt="Find Therapist Image"></div>
    </div>
    <div class="col-md-12 col-sm-12 col-lg-6">
    <div class="find-thera-cap position-relative">
    <a class="video-play spinner text-center rounded-circle position-absolute" href="https://player.vimeo.com/video/25969077" data-fancybox title=""><i class="flaticon-play"></i></a>
    <div class="find-thera-cap-inner">
    <h2 class="mb-0">Get your Dream PTE or IELTS Score with Career Clinic Live Classes</h2>
    <p>Learn from the Best Tutors</p>
    <div class="btns-group d-inline-flex flex-wrap align-items-center w-100">
    <a class="thm-btn v2 scndry-bg brd-rd5 d-inline-block position-relative overflow-hidden" href="#" title="">Book Your free Demo</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div><!-- Find Therapist Wrap -->
    </div>
    </section>
    
    
    <div class="our-specification" id="scholarship">
    <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
    <div class="about-us-short-sec  " data-style="style1">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="about-us-classic">
    
    <div class="about-us-short">
    
    <h1>Scholarships</h1>
    <img src="../img/specification.jpg" class="sch">
    <span class="sub-title">There are various scholarships offered by the UK government, universities and private organisations to support the education of international students. Here is a list of the most popular scholarships to study in UK:</span>
    
    <ul>
    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>British Chevening Scholarships for International Scholarships</li>
    
    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Erasmus Mundus Joint Masters Degree Scholarship</li>
    
    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>A.S Hornby Educational Trust Scholarship</li>
    
    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Felix Scholarships</li>
    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Rhodes Scholarship</li>
    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Commonwealth Scholarship and Fellowship Plan</li>
    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Charles Wallace India Trust Scholarships (CWIT)</li>
    
    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Dr. Manmohan Singh Scholarships</li>
    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Inlaks Scholarships</li>
    </ul>
    
    </div>  
    </div>          
    </div>
    </div>  
    </div>  
    </div>  
    </div></div></div></div>
    
    
    <section id="visa">
    <div class="w-100 scndry-layer opc98 position-relative">
    <div class="fixed-bg patern-bg" style="background-image: url(../img/pattern-bg1.jpg);"></div>
    <div class="testi-storie-wrap w-100">
    <div class="row mrg">
    
    
    
    
    
    
    
    
    
    
    <div class="col-md-12 col-sm-12 col-lg-6">
    
    
    
    
    <div class="testi-wrap d-flex flex-wrap justify-content-center align-items-center position-relative w-100">
    
    <div class="Unive">
    <h3> Visa Options </h3>
    </div>
    
    
    <div class="testi-inner d-inline-block w-100">
    <div class="testi-list-caro">
    
    
    <div class="testi-item-wrap d-block w-100">
    <div class="testi-item-box position-relative brd-rd10 w-100">
    <div class="testi-item-top d-flex flex-wrap align-items-center justify-content-between w-100">
    <div class="testi-item-info">
    <h4 class="mb-0">Child Student - Tier 1</h4>
    <span class="d-block thm-clr">Cost - £394</span>
    </div>
    <span class="rate d-inline-block thm-clr"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
    </div>
    <p class="type">Type- Study</p>
    <p class="mb-0">You can apply for the Tier 4 (Child) student visa if you are aged between 4 and 17 and you want to study at an independent school in the UK. However w...</p>
    </div>
    </div>
    
    <div class="testi-item-wrap d-block w-100">
    <div class="testi-item-box position-relative brd-rd10 w-100">
    <div class="testi-item-top d-flex flex-wrap align-items-center justify-content-between w-100">
    <div class="testi-item-info">
    <h4 class="mb-0">Child Student - Tier 2</h4>
    <span class="d-block thm-clr">Cost - £394</span>
    </div>
    <span class="rate d-inline-block thm-clr"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
    </div>
    <p class="type">Type- Study</p>
    <p class="mb-0">You can apply for the Tier 4 (Child) student visa if you are aged between 4 and 17 and you want to study at an independent school in the UK. However w...</p>
    </div>
    </div>
    
    <div class="testi-item-wrap d-block w-100">
    <div class="testi-item-box position-relative brd-rd10 w-100">
    <div class="testi-item-top d-flex flex-wrap align-items-center justify-content-between w-100">
    <div class="testi-item-info">
    <h4 class="mb-0">Child Student - Tier 3</h4>
    <span class="d-block thm-clr">Cost - £394</span>
    </div>
    <span class="rate d-inline-block thm-clr"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
    </div>
    <p class="type">Type- Study</p>
    <p class="mb-0">You can apply for the Tier 4 (Child) student visa if you are aged between 4 and 17 and you want to study at an independent school in the UK. However w...</p>
    </div>
    </div>
    
    
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="col-md-12 col-sm-12 col-lg-6">
    <div class="storie-wrap text-center d-flex flex-wrap justify-content-center align-items-center overflow-hidden position-relative w-100" style="background-image: url(../img/story-bg.jpg);">
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
    </div><!-- Testimonials & Stories Wrap -->
    </div>
    </section>
    
    
    
    <section class="career_oppo" id="work_opportunities">
    <div class="w-100 position-relative">
    <div class="get-time-method-wrap position-relative w-100">
    <div class="row mrg">
    <div class="col-md-12 col-sm-12 col-lg-6">
    <div class="get-time-wrap d-flex flex-wrap justify-content-center align-items-center position-relative bg-color5 w-100">
    <div class="get-time-inner d-inline-block w-100">
    <div class="sec-title v2 w-100">
    <div class="sec-title-inner">
    <h2 class="mb-0">Careers + Work Opportunities.</h2>
    <p class="mb-0">Studying in the UK offers a variety of experiences. The cultural and traditional values of the UK attract several international students every year. The popular areas of employment in UK are as follows:</p>
    </div>
    </div><!-- Sec Title -->
    
    
    <div class="get-time-box brd-rd10 bg-color6 w-100">
    <h3>Part-time Work Opportunities</h3>
    <p>Maximum of 20 hours per week for regular students</p>
    <p>Maximum of 10 hours per week for language center students</p>
    </div>
    
    <div class="get-time-box brd-rd10 bg-color6 w-100">
    <h3>Post Study Work VISA</h3>
    <p>Students completing a Bachelors or Masters program get a work VISA of 2 years.</p>
    <p>PhD graduates get a work VISA of 3 years.</p>
    </div>
    
    </div>
    </div>
    </div>
    
    
    <div class="col-md-12 col-sm-12 col-lg-6">
    <div class="method-apply-wrap gray-layer opc95 d-flex flex-wrap justify-content-center align-items-center position-relative w-100">
    <div class="fixed-bg" style="background-image: url(assets/images/method-apply-bg.jpg);"></div>
    <div class="method-apply-inner d-inline-block w-100">
    
    
    <div class="methods-wrap d-inline-block w-100">
    <div class="row">
    <div class="col-md-6 col-sm-6 col-lg-6">
    <div class="method-box d-flex flex-wrap align-items-start w-100">
    <img src="../img/icon/1.png">
    <div class="method-box-inner">
    <h4 class="mb-0">Arts and Humanities</h4>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6">
    <div class="method-box d-flex flex-wrap align-items-start w-100">
    <img src="../img/icon/2.png">
    <div class="method-box-inner">
    <h4 class="mb-0">Social Sciences</h4>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6">
    <div class="method-box d-flex flex-wrap align-items-start w-100">
    <img src="../img/icon/3.png">
    <div class="method-box-inner">
    <h4 class="mb-0">Law and Legal Studies</h4>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6">
    <div class="method-box d-flex flex-wrap align-items-start w-100">
    <img src="../img/icon/4.png">
    <div class="method-box-inner">
    <h4 class="mb-0">Engineering and Technology</h4>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6">
    <div class="method-box d-flex flex-wrap align-items-start w-100">
    <img src="../img/icon/5.png">
    <div class="method-box-inner">
    <h4 class="mb-0">Architecture</h4>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6">
    <div class="method-box d-flex flex-wrap align-items-start w-100">
    <img src="../img/icon/6.png">
    <div class="method-box-inner">
    <h4 class="mb-0">Design</h4>
    </div>
    </div>
    </div>
    
    <div class="col-md-6 col-sm-6 col-lg-6">
    <div class="method-box d-flex flex-wrap align-items-start w-100">
    <img src="../img/icon/7.png">
    <div class="method-box-inner">
    <h4 class="mb-0">Medicine and Life Sciences</h4>
    </div>
    </div>
    </div>
    
    <div class="col-md-6 col-sm-6 col-lg-6">
    <div class="method-box d-flex flex-wrap align-items-start w-100">
    <img src="../img/icon/8.png">
    <div class="method-box-inner">
    <h4 class="mb-0">Natural Sciences</h4>
    </div>
    </div>
    </div>
    
    
    
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div><!-- Get In Time & Method Apply Wrap -->
    </div>
    </section>
    
    
    
    <section class="sLARSection" style="background-color: rgb(232, 244, 253); position: relative;">
    <div class="container">
    <h2>Why Study in United Kingdom</h2>
    <p>The United Kingdom is home to the world’s most esteemed universities and is among the popular destinations for studying abroad. Ranked as the best education systems in the world, the British Education System provides a plethora of courses in various subjects including Business, Engineering, Medicine, Arts, and Design delivered through exceptional teaching styles. The curriculum is designed in a flexible way which helps students customize their courses depending on their unique interests. The United Kingdom is among the top countries for advanced research and has contributed consistently to groundbreaking discoveries.</p>
    <p>Apart from ranking high in academic excellence, the UK is known for its multicultural ethos that attracts many students globally. Famed for its heritage sites and art, students can also indulge a dynamic culture which makes their stay merrier. Being the global hub of Europe, the country has a high-income economy making it the best place to find various job opportunities.</p>
    
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
    <div class="card">
    <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">     
    <span class="title">Collapsible Group Item #1 </span>
    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
    <div class="card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
    </div>
    </div>
    </div>
    <div class="card">
    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">     
    <span class="title">Collapsible Group Item #2</span>
    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
    <div class="card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
    </div>
    </div>
    </div>
    <div class="card">
    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
    <span class="title">Collapsible Group Item #3</span>
    <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordionExample">
    <div class="card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="image-column col-lg-6 col-md-12 col-sm-12">
    <div class="inner-column">
    <div class="image">
    <img src="../img/faq-1-1-1.png" alt="">
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </section>
@endsection

