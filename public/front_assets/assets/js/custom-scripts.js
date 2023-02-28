$(document).ready(function () {
  'use strict';

  //===== Menu Active =====//
  var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
  $("nav ul li a").each(function () {
    if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
    $(this).parent('li').addClass("active").parent().parent().addClass("active").parent().parent().addClass("active");
  });

  //===== Menu Active =====//
  var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
  $(".rsnp-mnu ul li a").each(function () {
    if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
    $(this).parent('li').addClass("active").parent().parent().addClass("active-parent").parent().parent().addClass("active-parent");
  });

  //===== Width =====//
  var width = window.innerWidth;

  //===== Wow Animation Setting =====//
  if ($(".wow").length > 0) {
    var wow = new WOW({
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }); 

    wow.init();
  }

  //===== Header Search =====//
  $('.search-btn').on('click', function () {
    $('.header-search').addClass('active');
    return false;
  });
  $('.search-close-btn').on('click', function () {
    $('.header-search').removeClass('active');
    return false;
  });

  //===== Side Menu =====//
  $('.rspn-mnu-btn').on('click', function () {
    $('.rsnp-mnu').addClass('slidein');
    return false;
  });
  $('.rspn-mnu-cls').on('click', function () {
    $('.rsnp-mnu').removeClass('slidein');
  });
  $('.rsnp-mnu li.menu-item-has-children > a').on('click', function () {
    $(this).parent().siblings('li').children('ul').slideUp();
    $(this).parent().siblings('li').removeClass('active');
    $(this).parent().children('ul').slideToggle();
    $(this).parent().toggleClass('active');
    return false;
  });

  //===== Select =====//
  if ($('.slc-wrp > select').length > 0) {
    $('.slc-wrp > select').selectpicker();
  }

  //===== Sticky Sidebar =====//
  if(width > 991) {
    if ($('.post-detail-wrap > div.row > div').length > 0) {
      $('.post-detail-wrap > div.row > div').theiaStickySidebar({
        additionalMarginTop: 40,
        additionalMarginBottom: 40
      });
    }
  }

  //===== Counter Up =====//
  if ($.isFunction($.fn.counterUp)) {
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
  }

  //===== LightBox =====//
  if ($.isFunction($.fn.fancybox)) {
    $('[data-fancybox],[data-fancybox="gallery"]').fancybox({});
  }

  //===== Scrollbar =====//
  if ($('.rsnp-mnu').length > 0) {
    var ps = new PerfectScrollbar('.rsnp-mnu');
  }

  //===== Calendar =====//
  if ($('#calendar').length > 0) {
    $('#calendar').fullCalendar({
      defaultDate: '2021-02-12',
      editable: true,
      eventLimit: true // allow "more" link when too many events
    });
  }

  //===== Contact Form Validation =====//
  if($('#email-form').length){
    $('form#email-form').submit(function (e) {
      e.preventDefault();
      var fname = $('#email-form .fname').val();
      var email = $('#email-form .email').val();
      var subject = $('#email-form .subject').val();
      var message = $('#email-form .contact_message').val();
      if(fname == '' || email == '') {
        $(this).children('.response').html('<div class="failed alert alert-warning text-center rounded-pill mt-2">Please fill the required fields.</div>');
        return false;
      }
      $.ajax({
        url: "sendemail.php",
        method: "POST",
        data: $(this).serialize(),
        beforeSend: () => {
          $(this).children('.response').html('<div class="text-info"><img src="assets/images/preloader.gif"> Loading...</div>');
        },
        success: (data) => {
          $(this).children('.response').fadeIn().html(data);
          setTimeout(function () {
            $(this).children('.response').fadeOut("slow");
          }, 5000);
          $(this).trigger("reset");
        },
        error: (res) => {
          console.log(res);
          $(this).children('.response').fadeIn().html(data);
        }
      });
    });
  }

  //===== Slick Carousel =====//
  if ($.isFunction($.fn.slick)) {

    //=== Featured Area Carousel ===//
    $('.feat-caro').slick({
      initialSlide: 0,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      autoplay: false,
      autoplaySpeed: 6000,
      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
      speed: 1500,
      draggable: true,
      dots: false,
      arrows: true,
      pauseOnDotsHover: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      prevArrow:"<button type='button' class='slick-prev'><i class='flaticon-arrow-pointing-to-right'></i></button>",
      nextArrow:"<button type='button' class='slick-next'><i class='flaticon-arrow-pointing-to-left'></i></button>",
      responsive: [{
        breakpoint: 1076,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      },
      {
        breakpoint: 851,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      }]
    });

    //=== Featured Area Carousel 2 ===//
    $('.feat-caro2').slick({
      initialSlide: 0,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: false,
      autoplay: true,
      autoplaySpeed: 6000,
      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
      speed: 1500,
      draggable: true,
      dots: false,
      arrows: true,
      pauseOnDotsHover: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      prevArrow:"<button type='button' class='slick-prev'><i class='flaticon-arrow-pointing-to-right'></i></button>",
      nextArrow:"<button type='button' class='slick-next'><i class='flaticon-arrow-pointing-to-left'></i></button>",
      responsive: [{
        breakpoint: 995,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      },
      {
        breakpoint: 851,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      },
      {
        breakpoint: 770,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      }]
    });

    //=== Featured Area Image Carousel ===//
    $('.feat-img-caro').slick({
      initialSlide: 0,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 6000,
      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
      speed: 1500,
      draggable: true,
      dots: true,
      arrows: true,
      pauseOnDotsHover: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      prevArrow:"<button type='button' class='slick-prev'><i class='flaticon-arrow-pointing-to-right'></i></button>",
      nextArrow:"<button type='button' class='slick-next'><i class='flaticon-arrow-pointing-to-left'></i></button>",
      responsive: [{
        breakpoint: 981,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 851,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 770,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 490,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });

    //=== News Carousel ===//
    $('.news-caro').slick({
      arrows: true,
      initialSlide: 0,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      fade: false,
      autoplay: false,
      autoplaySpeed: 5000,
      speed: 1000,
      draggable: true,
      dots: false,
      pauseOnDotsHover: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      prevArrow:"<button type='button' class='slick-prev'><i class='flaticon-angle-pointing-to-left'></i></button>",
      nextArrow:"<button type='button' class='slick-next'><i class='flaticon-angle-arrow-pointing-to-right'></i></button>",
      responsive: [{
        breakpoint: 1210,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 995,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: true
        }
      }]
    });

    //===== Testimonials Carousel =====//
    $('.testi-list-caro').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      autoplay: true,
      prevArrow:"<button type='button' class='slick-prev'><i class='flaticon-angle-pointing-to-left'></i></button>",
      nextArrow:"<button type='button' class='slick-next'><i class='flaticon-angle-arrow-pointing-to-right'></i></button>",
      // slide: 'li',
      fade: true,
      // asNavFor: '.testi-nav-caro',
      responsive: [{
      breakpoint: 1290,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      },
      {
      breakpoint: 850,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      },
      {
      breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }]
    });

    $('.testi-nav-caro').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.testi-list-caro',
      dots: false,
      arrows: false,
      // slide: 'li',
      centerMode: true,
      vertical: true,
      centerPadding: '0px',
      focusOnSelect: true,
      prevArrow:"<button type='button' class='slick-prev'><i class='flaticon-angle-pointing-to-left'></i></button>",
      nextArrow:"<button type='button' class='slick-next'><i class='flaticon-angle-arrow-pointing-to-right'></i></button>",
      responsive: [{
      breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
      breakpoint: 995,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false,
          vertical: false
        }
      },
      {
      breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false,
          vertical: false
        }
      }]
    });

  }

}); //===== Document Ready Ends =====//

//===== Window onLoad =====//
$(window).on('load',function () {
  'use strict';
  
  //===== Page Loader =====//
  jQuery("#preloader").fadeOut(300);

  //===== Isotope =====//
  if (jQuery('.fltr-itm').length > 0) {
    if (jQuery().isotope) {
      var jQuerycontainer = jQuery('.masonry'); // cache container
      jQuerycontainer.isotope({
        itemSelector: '.fltr-itm',
        columnWidth: .1
      });
      jQuery('.filter-links a').on('click',function () {
        var selector = jQuery(this).attr('data-filter');
        jQuery('.filter-links li').removeClass('active');
        jQuery(this).parent().addClass('active');
        jQuerycontainer.isotope({ filter: selector });
        return false;
      });
      jQuerycontainer.isotope('layout'); // layout/layout
    }

    jQuery(window).resize(function () {
      if (jQuery().isotope) {
        jQuery('.masonry').isotope('layout'); // layout/relayout on window resize
      }
    });
  }

});//===== Window onLoad Ends =====//

//===== Sticky Header =====//
$(window).on('scroll',function () {
  'use strict';

  var menu_height = $('header').innerHeight();
  var scroll = $(window).scrollTop();
  if (scroll >= menu_height) {
    $('body').addClass('sticky');
  } else {
    $('body').removeClass('sticky');
  }

});//===== Window onScroll Ends =====//








$('.News_scroll').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots:false,
	 navText: ["<img src='img/left.png'>","<img src='img/right.png'>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})


$('.testi_monial').owlCarousel({
    loop:true,
    margin:30,
    autoplay:true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})


   		    $('.newSticky').css('display','none');
			var zero = 0;
			$(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
					$('.newSticky').fadeIn();
					$('.newSticky').toggleClass('stickyFooter', $(window).scrollTop()<zero);
					zero = $(window).scrollTop();
                }
                else{
                	$('.newSticky').fadeOut();
                }
            });




function openHeaderTab(evt, tabName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("cd-dropdown-indv");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("cd-dropdown-bar-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" cd-active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " cd-active";
}













$(document).ready(function(){
$(".step_1").click(function()
{
	A();
	$(this).addClass('active');
	$('#pin1').show();
	$('#pin1').addClass('active');

});
$(".step_2").click(function()
{
	A();
	$(this).addClass('active');
	$('#pin2').show();
	$('#pin2').addClass('active');
	
	
});

$(".step_3").click(function()
{
	A();
	$(this).addClass('active');
	$('#pin3').show();
	$('#pin3').addClass('active');
	
	
});

$(".step_4").click(function()
{
	A();
	$(this).addClass('active');
	$('#pin4').show();
	$('#pin4').addClass('active');
	
	
});

$(".step_5").click(function()
{
	A();
	$(this).addClass('active');
	$('#pin5').show();
	$('#pin5').addClass('active');
	
	
});

function A()
{
$('.menu li').removeClass('active');
$("#pin1").hide();
$('#pin1').removeClass('active');	
$('#pin2').removeClass('active');	
$('#pin3').removeClass('active');	
$('#pin4').removeClass('active');	
$('#pin5').removeClass('active');	
$("#pin2").hide();	
$("#pin3").hide();	
$("#pin4").hide();	
$("#pin5").hide();		
}
});


/*--------show more----------*/
$(document).ready(function(){
  $(".list_read").click(function(){
    $(this).closest('.Div_collapse').find('.divv_c').toggleClass("main");
  });
});



/*--------show more----------*/



$(window).scroll(function(){
  var sticky = $('.sticky_section'),
      scroll = $(window).scrollTop();

  if (scroll >= 480) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});