;(function($) {

  $(document).ready(function() {

    //Mesonry active
    if($('#masonry-grid').length > 0){

      $('#masonry-grid').masonry({
        itemSelector: '.mesonry-item',
        isAnimated: true,
        originLeft:true,
      });
      $("#grid-filter li").click(function() {
        var group = $(this).data('category');
      var group_class = "." + group;

        if(group == "*"){
            $(".mesonry-item").show();
            $('#masonry-grid').masonry('layout');

           }
        else if(group != "") {
          $(".mesonry-item").hide();
          $(group_class).show();
          $('#masonry-grid').masonry('layout');
        } else {
          $(".mesonry-item").show();
          $('#masonry-grid').masonry('layout');
        };
        $("#grid-filter li").removeClass('active');
        $(this).addClass('active');
      });


    }


    //Sliders define
    const logoSlider = $('.logos');
    const caseStudy = $('.case-studes');
    const testimonial3 = $('.testimonials-3');
    const testimonial4 = $('.testimonials-4');
    const caseStudyRtl = $('.case-studes-rtl');

    //Testimonial 3 slider
    testimonial3.owlCarousel({
      loop: true,
      nav: false,
      dots: false,
      items: 3,
      margin: 30,
      responsive: {
        0: {
          items: 1
        },
        800: {
          items: 2
        },
        1200: {
          items: 3
        }
      }
    });

    //Testimonial Slider
    if (testimonial4.length > 0) {
      testimonial4.owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        items: 1,
        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
      });
    }

    //Logo Slider
    logoSlider.owlCarousel({
      loop: true,
      nav: false,
      dots: false,
      items: 5,
      margin: 30,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    });

    //CaseStudy owlCarousel
    caseStudy.owlCarousel({
      loop: true,
      nav: true,
      dots: false,
      items: 3,
      margin: 30,
      navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })

    //CaseStudy owlCarousel Rtl
    caseStudyRtl.owlCarousel({
      loop: true,
      nav: true,
      dots: false,
      items: 3,
      margin: 30,
      rtl: true,
      navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })


    //Mobile Menus acitve
    const mobile_menu = $('.mobile-menus');
    const menu_actives = $('.menu-wrap');
    const hamburger_menu = $('.hamburger-menu');
    mobile_menu.on('click', function() {
      menu_actives.toggleClass('mobile-menu-active');
      hamburger_menu.toggleClass('active');
    });

    //product size
    const sizes = $('ul.product-sizes li');

    sizes.on('click', function () {
      $('ul.product-sizes li').removeClass('active');
      $(this).addClass('active');
    });


     //product colors
     const colors = $('ul.product-colors li');

     colors.on('click', function () {
       $('ul.product-colors li').removeClass('active');
       $(this).addClass('active');
     });



    //Pricing table buttons

    $('#ce-toggle').click(function(event) {
      $('.plan-toggle-wrap').toggleClass('active');
    });

    $('#ce-toggle').change(function() {
      if ($(this).is(':checked')) {
        $('.tab-content #yearly').hide();
        $('.tab-content #monthly').show();
      } else {
        $('.tab-content #yearly').show();
        $('.tab-content #monthly').hide();
      }

    });


    //testimonial slider
    $('.testimonial-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-testimonial',
      dots: false,
      loop: true,
      centerMode: true,
      focusOnSelect: true,
      arrows: false,
    });


    $('.slider-testimonial').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: $('.testimonial-prev-arrow'),
      nextArrow: $('.testimonial-next-arrow'),
      fade: true,
      loop: true,
      asNavFor: '.testimonial-nav'
    });

    //testimonial slider Rtl
    $('.testimonial-nav-rtl').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-testimonial-rtl',
      dots: false,
      loop: true,
       rtl: true,
      centerMode: true,
      focusOnSelect: true,
      arrows: false,
    });


    $('.slider-testimonial-rtl').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
       rtl: true,
      prevArrow: $('.testimonial-prev-arrow'),
      nextArrow: $('.testimonial-next-arrow'),
      fade: true,
      loop: true,
      asNavFor: '.testimonial-nav-rtl'
    });



    //Product slider
    $('.product-slider-single').slick({
       slidesToShow: 1,
       slidesToScroll: 1,
       asNavFor: '.product-slider-nav',
       dots: false,
       arrows: false,
       centerMode: false,
       focusOnSelect: true
    });

    $('.product-slider-nav').slick({
       slidesToShow: 5,
       slidesToScroll: 1,
       arrows: false,

       focusOnSelect: true,
       asNavFor: '.product-slider-single'
    });





    // sticky header active
    if ($("#header").length > 0) {
      $(window).on('scroll', function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
          $("#header").removeClass("sticky");
        } else {
          $("#header").addClass("sticky");
        }
      });
    }

    //up button old function
    if ($(".up-arrow").length > 0) {
      $(window).on('scroll', function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 200) {
          $(".up-arrow").removeClass("active");
        } else {
          $(".up-arrow").addClass("active");
        }
      });
    }

    //minus

    var buttonPlus  = $(".qty-btn-plus");
    var buttonMinus = $(".qty-btn-minus");

    var incrementPlus = buttonPlus.click(function() {
      var $n = $(this)
      .parent(".qty-container")
      .find(".input-qty");
      $n.val(Number($n.val())+1 );
    });

    var incrementMinus = buttonMinus.click(function() {
      var $n = $(this)
      .parent(".qty-container")
      .find(".input-qty");
      var amount = Number($n.val());
      if (amount > 0) {
        $n.val(amount-1);
      }
    });


    //Up button functions
    var progressPath = document.querySelector('.progress-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function() {
      var scroll = $(window).scrollTop();
      var height = $(document).height() - $(window).height();
      var progress = pathLength - (scroll * pathLength / height);
      progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 550;
    jQuery(window).on('scroll', function() {
      if (jQuery(this).scrollTop() > offset) {
        jQuery('.progress-wrap').addClass('active-progress');
      } else {
        jQuery('.progress-wrap').removeClass('active-progress');
      }
    });

    jQuery('.progress-wrap').on('click', function(event) {
      event.preventDefault();
      jQuery('html, body').animate({
        scrollTop: 0
      }, duration);
      return false;
    })

    //scrolling
    if ($('.scroll').length > 0) {
      var scrollers = $('.scroll a[href*="#"]');
      scrollers.on('click', function(e) {
        e.preventDefault()
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
          },
          1000,
          'linear'
        )
      })
    }


    //Aos animation active

    AOS.init({
      offset: 200,
      duration: 400,
      easing: 'ease-in-out',
      anchorPlacement: 'top-bottom',
      disable: 'mobile'
    });

    //Nice select option active
    const selectOption = $('.niceSelect select');
    if (selectOption.length > 0) {
      selectOption.niceSelect()
    }


    //Dropdown functions
    const dropdownParrent = $('li.dropdown-parrent');
    const dropdownChildren = $('li.dropdown-parrent > a, .menu-arrow');
    const menuArrow = $('.menu-arrow');

    dropdownChildren.on('click', function(e) {
      e.preventDefault();
      $(this).parent(dropdownParrent).toggleClass('active');
      menuArrow.toggleClass('active')
    });

    //Tooltip calling
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    //demo sidebar active
    const demosIcon = $('#demosIcon, .demos');
    const demoSidebar = $('#demo-sidebar')
    demosIcon.on('click', function(e){
      e.preventDefault();
      demoSidebar.toggleClass('active-sidebar');
    })


    //mobile-wrap
    const mobile_nav_open = $('.mobile-nav-icon');
    const mobile_sidebar = $('.mobile-sidebar');
    const mobile_nav_close = $('.menu-close');
    const has_children = $('.has-children');

    mobile_nav_open.on('click', function(){
      mobile_sidebar.addClass('mobile-menu-active');
    });

    mobile_nav_close.on('click', function(){
      mobile_sidebar.removeClass('mobile-menu-active');
    });



  });


  //mobile-menus
  $('.mobile-nav a').each(function(){
    var href = $(this).attr('href');
    if(href = '#'){
      $(this).addClass('hash-nav')
    }else {
      $(this).removeClass('hash-nav')
    }
  });


  $.fn.menumarker = function(options){
    mobile_menu = $(this),
    settings = $.extend({
      format: "dropdown",
      sticky: false
    }, options);


    return this.each(function(){
      mobile_menu.find('li ul').parent().addClass('has-sub');
      var multiTg = function(){
        mobile_menu.find('.hash-nav').parent().addClass('hash-has-sub');
        mobile_menu.find(".has-sub").prepend('<span class="submenu-button"><em></em></span>');
        mobile_menu.find('.submenu-button').on('click', function(){
          $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open-sub')) {
                $(this).siblings('ul').removeClass('open-sub').hide('fadeIn');
                $(this).siblings('ul').hide('fadeIn');
            } else {
                $(this).siblings('ul').addClass('open-sub').hide('fadeIn');
                $(this).siblings('ul').slideToggle().show('fadeIn');
            }
        });
      };

      if (settings.format === 'multitoggle') multiTg();
      else mobile_menu.addClass('dropdown');
      if (settings.sticky === true) mobile_menu.css('position', 'fixed');
      var resizeFix = function () {
          if ($(window).width() > 991) {
              mobile_menu.find('ul').show('fadeIn');
              mobile_menu.find('ul.sub-menu').hide('fadeIn');
          }
      };
      resizeFix();
      return $(window).on('resize', resizeFix);

    })

  }


  $(document).ready(function(){
    $('.mobile-nav').menumarker({
      format: "multitoggle"
    });

    //Counter
    const ucounter = $('.up-counter');

    if (ucounter.length > 0) {
      ucounter.countUp();  
    }
   

  });




  $(window).on('load', function(event) {
    //Preloader active
    const preloader = $('.preloader');
    if (preloader.length) {
      preloader.delay(200).fadeOut(500);
    }

  });


})(jQuery);



// Price filtering
(function() {

	var parent = document.querySelector("#rangeSlider");
	if(!parent) return;

	var
	rangeS = parent.querySelectorAll("input[type=range]"),
		numberS = parent.querySelectorAll("input[type=number]");

	rangeS.forEach(function(el) {
		el.oninput = function() {
			var slide1 = parseFloat(rangeS[0].value),
				slide2 = parseFloat(rangeS[1].value);

			if (slide1 > slide2) {
				[slide1, slide2] = [slide2, slide1];
			}

			numberS[0].value = slide1;
			numberS[1].value = slide2;
		}
	});

	numberS.forEach(function(el) {
		el.oninput = function() {
			var number1 = parseFloat(numberS[0].value),
				number2 = parseFloat(numberS[1].value);

			if (number1 > number2) {
				var tmp = number1;
				numberS[0].value = number2;
				numberS[1].value = tmp;
			}

			rangeS[0].value = number1;
			rangeS[1].value = number2;

		}
	});

})();
