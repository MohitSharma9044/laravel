<header>
<section class="topbar">
<h1 style='display:none;'>Career Clinic Overseas Education Consultants</h1>		
<div class="wrapper">
<ul class="topbar-listing">
<li class="apply-now"><a href="javascript:void(0)"  data-toggle="modal" data-target="#login">Login
<span class="line-1"></span>
<span class="line-2"></span>
<span class="line-3"></span>
<span class="line-4"></span>
</a></li>
<li class="stud-login"><a href="javascript:void(0)"  data-toggle="modal" data-target="#signup">Sign Up</a></li>
<li class="req-call-back" ><a href="javascript:void(0)"  data-toggle="modal" data-target="#call_back" class="request-callback">request a call back</a></li>
</ul>
</div>

</section>
<section class="header-section">
<div class="wrapper">
<div class="header-logo">
<ul>
<li>
<div class="close-menu mob-only" id="close_header_menu">
<a href="javascript:void(0);">
<div id="nav-icon">
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</a>
</div>
</li>
<li class="logo">
<a href="#">
<img class="img-responsive"
src="{{ asset('front_assets/img/logo.png') }}" width="" height="">
</a>
</li>
</ul>

</div>
</div>
<div class="contact-info desk-only">
<div class="box">
<ul class="contact-info-listing">
<li>
<a href="tel:+91 8527505333">
<div class="img-box"><i class="fa fa-phone-square"></i></div>
<div class="data">
<span>Call us Now</span>
<p>+91 8527505333</p>
</div>
</a>
</li>
<li>
<a href="#" class="blink-btn">
<div class="img-box">
<img src="{{ asset('front_assets/img/calender.png') }}">
</div>
<div class="data">Schedule Couselling
</div>
</a>
</li>
</ul>
<ul class="social-list desk-only">
<li data-original-title="facebookLink" title="facebookLink"><a href="https://www.facebook.com/careerclinicpvt" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
<li data-original-title="twitterLink" title="twitterLink"><a href="https://twitter.com/CareerTech4" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li data-original-title="youTubeLink" title="youTubeLink"><a href="https://www.youtube.com/channel/UCGYctYTV0MfEjQS2gE51Vsw" target="_blank"><i class="fa fa-youtube"></i></a></li>
<li data-original-title="instaSocialLink" title="instaSocialLink"><a href="https://www.instagram.com/career_clinic_/" target="_blank"><i class="fa fa-instagram"></i></a></li>
<li data-original-title="linkedInLink" title="linkedInLink"><a href="https://www.linkedin.com/company/career-clinic-private-limited/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<li data-original-title="telegramLink" title="telegramLink"><a href="#" target="_blank"><i class="fa fa-telegram"></i></a></li>
<li data-original-title="gmailLink" title="gmailLink"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>

</ul>
</div>
</div>
<div class="header-nav">
<div class="header shadow">
<div class="wrapper">
<ul class="main-menu">
<li><a href="{{ url('/') }}" class=active>Home</a></li>

<li><a href="javascript:void(0);">Countries</a>
<div class="cd-nav-dropdown-container">
<div class="cd-nav-dropdown-top-container row">
{!!  getTopNavBarMenu() !!}
</div>
</div>
</li>

{{-- <li><a href="javascript:void(0);">Countries</a>


    <div class="cd-nav-dropdown-container">
    <div class="cd-nav-dropdown-top-container row">
    <div class="cd-dropdown-left col-3 js-cd-dropdown-left"> 
    
    <a href="study-abroad/usa.php" onmouseover="openHeaderTab(event, 'USA')" class="cd-dropdown-bar-link cd-active js-cd-dropdown-bar-link d-block" data-id="USA">USA</a> 
    <a href="study-abroad/canada.php"class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block" onmouseover="openHeaderTab(event, 'Canada')" data-id="Canada">Canada</a> 
    <a href="study-abroad/australia.php"class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block" onmouseover="openHeaderTab(event, 'Australia')" data-id="Australia">Australia</a> 
    <a href="study-abroad/uk.php" onmouseover="openHeaderTab(event, 'UK')"  class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block" data-id="UK">UK</a> 
    <a href="study-abroad/newzeland.php" onmouseover="openHeaderTab(event, 'Newzeland')"  class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block" data-id="Newzeland">Newzeland</a> 
    <a href="study-abroad/ireland.php" onmouseover="openHeaderTab(event, 'Ireland')" class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block" data-id="Ireland">Ireland</a> 
    
    <a href="javascript:void(0)"  onmouseover="openHeaderTab(event, 'european_union')"  class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block" data-id="european_union">European Union</a>
    
    <a href="javascript:void(0)" onmouseover="openHeaderTab(event, 'east_europe')" class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block" data-id="east_europe">East Europe</a> 
    
    <a href="javascript:void(0)" onmouseover="openHeaderTab(event, 'asian_countries')" class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block" data-id="asian_countries">Asian Countries</a>            
    <a href="javascript:void(0)" onmouseover="openHeaderTab(event, 'help_choose')" class="cd-dropdown-bar-link js-cd-dropdown-bar-link d-block " data-id="help_choose">Need Help to Choose?</a> 
    
    </div>
    
    
    
    <div class="cd-dropdown-right col-9">
    
    <div class="cd-dropdown-indv " id="USA"> </div>
    <div class="cd-dropdown-indv " id="Canada"> </div>
    <div class="cd-dropdown-indv " id="Australia"> </div>
    <div class="cd-dropdown-indv " id="UK"> </div>
    <div class="cd-dropdown-indv " id="Newzeland"> </div>
    <div class="cd-dropdown-indv " id="Ireland"> </div>
    
    
    <div class="cd-dropdown-indv " id="european_union">
    <div class="row"><a class="menu-rightside-heading capture-none" href="#"><span class="menu-rightside-heading-span">European Union</span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 6 9"><use href="#icon-dropdown-right"></use></svg></a></div>
    <div class="row">
    <div class="col-12 ">
    <div> <div class="d-flex">
    <div class="mr-2">
    <div class="d-block"><a href="study-abroad/switzerland.php" class="cd-drop-links ">Study in Switzerland </a></div>
    <div class="d-block"><a href="study-abroad/finland.php" class="cd-drop-links ">Study in Finland </a></div>
    <div class="d-block"><a href="study-abroad/belgium.php" class="cd-drop-links ">Study in Belgium </a></div>
    <div class="d-block"><a href="study-abroad/denmark.php" class="cd-drop-links ">Study in Denmark </a></div>
    <div class="d-block"><a href="study-abroad/portugal.php" class="cd-drop-links ">Study in Portugal </a></div>
    
    </div>
    <div class="mr-2">
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">Study in Spain </a></div>
    
    <div class="d-block"><a href="study-abroad/france.php" class="cd-drop-links ">Study in France </a></div>
    <div class="d-block"><a href="study-abroad/italy.php" class="cd-drop-links ">Study in Italy </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">Study in Germany </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">Study in Poland </a></div>
    <div class="d-block"><a href="study-abroad/hungary.php" class="cd-drop-links ">Study in Hungary </a></div>
    <div class="d-block"><a href="study-abroad/netherlands.php" class="cd-drop-links ">Study in Netherland </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">Study in Swedan </a></div>
    </div>
    
    <div class="mr-2">
    <div class="d-block"><a href="study-abroad/mbbs-germany.php" class="cd-drop-links ">MBBS in Germany </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-poland.php" class="cd-drop-links ">MBBS in Poland </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-romania.php" class="cd-drop-links ">MBBS in Romania </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-latvia.php" class="cd-drop-links ">MBBS in Lativa </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-czech-republic.php" class="cd-drop-links ">MBBS in Czech Republic </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-lithuania.php" class="cd-drop-links ">MBBS in Lithuanuia </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-serbia.php" class="cd-drop-links ">MBBS in Serbia </a></div>
    
    </div>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    
    
    <div class="cd-dropdown-indv " id="east_europe">
    <div class="row"></div>
    <div class="row">
    <div class="col-12 ">
    <div> <div class="d-flex">
    <div class="mr-2">
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">MBBS In Russia </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-georgia.php" class="cd-drop-links ">MBBS In Georgia </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-belarus.php" class="cd-drop-links ">MBBS In Belarus </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-ukrain.php" class="cd-drop-links ">MBBS In Ukraine </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-armenia.php" class="cd-drop-links ">MBBS In Armenia </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-moldova.php" class="cd-drop-links ">MBBS In Moldova </a></div>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    
    <div class="cd-dropdown-indv " id="asian_countries">
    
    <div class="row">
    <div class="col-12 ">
    <div> <div class="d-flex">
    <div class="mr-2">
    <div class="d-block"><a href="study-abroad/japan.php" class="cd-drop-links ">Study in japan </a></div>
    <div class="d-block"><a href="study-abroad/malaysia.php" class="cd-drop-links ">Study in Malaysia </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">MBBS in Uzbekistan </a></div>
    
    </div>
    <div class="mr-2">
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">Study in Dubai </a></div>
    <div class="d-block"><a href="study-abroad/singapore.php" class="cd-drop-links ">Study in Singapore </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-philippines.php" class="cd-drop-links ">MBBS in Phillipines </a></div>
    <div class="d-block"><a href="malaysia.php" class="cd-drop-links ">MBBS in Malaysia </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">MBBS in Kyrgystan </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">MBBS in Kazakstan </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">MBBS in Bangladesh </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">MBBS in Eqypt </a></div>
    </div>
    
    <div class="mr-2">
    <div class="d-block"><a href="study-abroad/china.php" class="cd-drop-links ">MBBS in China </a></div>
    <div class="d-block"><a href="study-abroad/mbbs-nepal.php" class="cd-drop-links ">MBBS in Nepal </a></div>
    <!--<div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">MBBS in Mumbai </a></div>-->
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">MBBS in Mauritius </a></div>
    
    </div>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="cd-dropdown-indv " id="help_choose">
    <div class="row"></div>
    <div class="row">
    <div class="col-12 ">
    <div> <div class="d-flex">
    <div class="mr-2">
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">Suitable Country To Study </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">Cost Effective Country </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">Immigration Friendly Country? </a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">Choose Country</a></div>
    <div class="d-block"><a href="{{ url('coming-soon') }}" class="cd-drop-links ">According To Country </a></div>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
    </div>
    <div>
    </div>
    </div>
    
    </li> --}}




    <li><a href="javascript:void(0);" title="">Exams Preparation</a>
<ul class="Drop_down">
<li><a href="ielts.php">IELTS</a></li>
<li><a href="study-abroad/gmat.php" >GMAT</a></li>
<li><a href="study-abroad/gre.php" >GRE</a></li>
<li><a href="study-abroad/sat.php" >SAT</a></li>
<li><a href="study-abroad/toefl.php" >TOEFL</a></li>
<li><a href="study-abroad/pte.php" >PTE</a></li>
<li><a href="study-abroad/act.php" >ACT</a></li>
<li><a href="study-abroad/usmle.php" >USMLE</a></li>
<li><a href="{{ url('coming-soon') }}" >PLAB</a></li>
<li><a href="study-abroad/fmge.php" >FMGE</a></li>
<li><a href="study-abroad/duolingo.php" >Duolingo</a></li>
<li><a href="{{ url('coming-soon') }}" >Tutor Require?</a></li>
</ul>

</li>

<li><a href="javascript:void(0);" title="">Courses</a>
<ul class="Drop_down">
<li><a href="{{ url('coming-soon') }}">Masters</a></li>
<li><a href="{{ url('coming-soon') }}" >Bachelor Courses</a></li>
<li><a href="{{ url('coming-soon') }}" >Diploma Courses</a></li>
<li><a href="{{ url('coming-soon') }}" >Doctrate / Phd / Research</a></li>
<li><a href="{{ url('coming-soon') }}" >Integrated Courses</a></li>
<li><a href="{{ url('coming-soon') }}" >MBBS / PG Abroad</a></li>
</ul>

</li>



<li><a href="{{ url('coming-soon') }}">Universities</a></li>

<li><a href="javascript:void(0);" title="">More</a>
<ul class="Drop_down">
<li><a href="{{ url('webinar') }}">Webinar</a></li>
<li><a href="events-news.php">Events & News</a></li>
<li><a href="{{ url('coming-soon') }}">GPA Calculator</a></li>
<li><a href="{{ url('franchise-partners') }}">Franchise Partners</a></li>
<li><a href="{{ url('post-degree') }}">Post Degree</a></li>
<li><a href="{{ url('travel-accomodation') }}">Travel & Accomodation</a></li>
<li><a href="{{ url('finance') }}">Finance</a></li>
</ul>

</li>



</ul>
</div>
</div>
</div>
</section>
</header>