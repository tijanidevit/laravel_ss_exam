(function($) {
    'use strict';

    /*=======================================
         PRELOADER                     
    ======================================= */
    $(window).on('load', function() {
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
        $(".slides__preload_wrapper").fadeOut(1500);
    });


    /* =======================================
        For slider
    =======================================*/
    $(".slider_owl").owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000, // Default is 5000
        smartSpeed: 1500, // Default is 250
        loop: true,
        navText: ["<i class='icon-glyph-205'></i>", "<i class='icon-glyph-204'></i>"],
        mouseDrag: true,
        touchDrag: true,
        nav: true,
    });
 

    /*=======================================
        Category Section  
    =======================================*/
    $("#best_book").owlCarousel({
        autoplayTimeout: 5000, //Set AutoPlay to 5 seconds
        autoplay: true,
        smartSpeed: 2000, // Default is 250
        items: 1,   
        loop: true,
        touchDrag: true,
        mouseDrag: true,
        pagination: false,
        dots: true,
        nav: true,
        navText: ["<i class='arrow_left'></i>", "<i class='arrow_right '></i>"]
    }); 

    /*=======================================
        Feedback Section  
    =======================================*/
    $("#lfeedback_cur").owlCarousel({
        autoplayTimeout: 5000, //Set AutoPlay to 5 seconds
        autoplay: true,
        smartSpeed: 2000, // Default is 250
        items: 1,   
        loop: false,
        touchDrag: true,
        mouseDrag: true,
        pagination: false,
        dots: true,
        nav: false,
        navText: ["<i class='logo-nav-icon'></i>", "<i class='logo-nav-icon'></i>"]
    });    
    
 
 
    /*=======================================
        Product  slider  
    =======================================*/

    $('#popula_cat').each( function () {
        $('#popula_cat').slick({
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '<i class="arrow_left"></i>',
            nextArrow: '<i class="arrow_right"></i>',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $(".btn-left").on("click", function() {
          $(this).parents('.project_list_one').find('.project_slider_one').slick('slickPrev');
        });

        $(".btn-right").on("click", function() {   
          $(this).parents('.project_list_one').find('.project_slider_one').slick('slickNext');
        });

    });
 
    /* =======================================
        For Menu
    =======================================*/
    $("#navigation").menumaker({
        title: "",
        format: "multitoggle"
    });

    /* =======================================
    		WOW ANIMATION
    ======================================= */
    var wow = new WOW({
        mobile: false
    });
    wow.init();
 

})(jQuery);