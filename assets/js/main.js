/**
*
* --------------------------------------------------------------------
*
* Template : solida - Modern Business and Corporate WordPress Theme
* Author : Tentaz
* Author URI : https://Tentaz.tech/
*
* --------------------------------------------------------------------
*
**/

(function($) {
    "use strict";
    // Sticky Menu Js Here***************
    var header = $('.tentaz-menu-sticky-here');
    var win = $(window);
    var headerinnerHeight = $(".header-inner-wrap").innerHeight();

    win.on('scroll', function() {
       var scroll = win.scrollTop();
       if (scroll < headerinnerHeight) {
           header.removeClass("sticky");
           
       } else {
           header.addClass("sticky");
       }
    });
    $('.header-inner-wrap').waypoint('sticky', {
        offset: 0
    });

    
    // Slider init   
    $('.tentaz-slider-carousel').slick({
        centerPadding: '0px',
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true
    });

    // Offcanvas Js Here
    $(document).ready(function(){
        $(".menu-button, .close-button, .offwrap, .tentaz-offcanvas").on('click', function() {
            $(".nav-toggle, .menu-offcanvas, .close-button, body").toggleClass("tentaz-offcanvas-open");
        });
    });

    $(".widget_nav_menu li a").filter(function(){
        return $.trim($(this).html()) == '';
    }).hide();

    // video 
    if ($('.player').length) {
        $(".player").YTPlayer();
    }    

    $(".menu-area .navbar ul > li.menu-item-has-children").hover(
        function () {
            $(this).addClass('tentaz-min');
        },
        function () {
            $(this).removeClass("tentaz-min");
        }
    );


    $( ".showcase-item" ).hover(function() {
        $( this ).toggleClass("hover");
    });

    //search 

    $('.sticky_search').on('click', function(event) {        
        $('.sticky_form_here').slideToggle('show');
        $( '.sticky_form_here input' ).focus();
    });


    $('.sticky_search').on('click', function() {
        $('body').removeClass('search-active').removeClass('search-close');
          if ($(this).hasClass('close-full')) {
            $('body').addClass('search-close');
        }
        else {
            $('body').addClass('search-active');
        }
        return false;
    });


    $('.sticky_form_search').on('click', function() {      
        $('body, html').removeClass('tentaz-search-active').removeClass('tentaz-search-close');
          if ($(this).hasClass('close-search')) {
          $('body, html').addClass('tentaz-search-close');

        }
        else {
          $('body, html').addClass('tentaz-search-active');
        }
        return false;
    });

    // Get a quote popup

    $('.menu li a').on('click', function () {
        $('.menu-wrap-offcanvas').removeClass('tentaz-offcanvas-open');
        $('body').removeClass('tentaz-offcanvas-open')
    });

    // Portfolio Single Carousel
    if ($('.portfolio-carousel').length) {
        $('.portfolio-carousel').owlCarousel({
            loop: true,
            nav:true,
            autoHeight:true,
            items:1
        })
    }

    $(function(){ 
        $( "ul.children" ).addClass( "sub-menu" );
    });

    
    //Videos popup jQuery activation code
    $('.popup-videos').magnificPopup({
        disableOn: 10,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    //type writer
    $(".tentaz-banner .cd-words-wrapper p:first-child").addClass("is-visible");
       
    // Sticky Sidebar
    $('.contents-sticky, .sticky-sidebar').theiaStickySidebar({
        additionalMarginTop: 160,
        additionalMarginBottom: 20,
    });


    //preloader
    $(window).on( 'load', function() {
        $("#tentaz__preloader_here").delay(400).fadeOut(300);
        $("#tentaz__preloader_here").delay(400).fadeOut(300);
    })

    // image loaded portfolio init
    $('.grid').imagesLoaded(function() {
        $('.portfolio-filter').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
        var $grid = $('.grid').isotope({

            animationOptions: {
             duration: 750,
             easing: 'linear',
             queue: false
           },

            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-item',
            }
        });
    });
            
    // portfolio Filter
    $('.portfolio-filter button').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });

        
    // Counter Up  
    $('.tentaz-counter').counterUp({
        delay: 20,
        time: 1500
    });

    
    // scrollTop init
    var win=$(window);
    var totop = $('#scrollUp');    
    win.on('scroll', function() {
        if (win.scrollTop() > 150) {
            totop.fadeIn();
        } else {
            totop.fadeOut();
        }
    });
    totop.on('click', function() {
        $("html,body").animate({
            scrollTop: 0
        }, 500)
    });   

    $(function(){ 
        $( "ul.children" ).addClass( "sub-menu" );
    });    
    
    $( ".comment-body, .comment-respond" ).wrap( "<div class='comment-full'></div>" ); 
    $('.tentaz-heading .description p:empty').remove();
    
    //woocommerce quantity style
    if ( ! String.prototype.getDecimals ) {
          String.prototype.getDecimals = function() {
              var num = this,
                  match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
              if ( ! match ) {
                  return 0;
              }
              return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
          }
      }
    // Quantity "plus" and "minus" buttons
    $( document.body ).on( 'click', '.tentaz-plus, .tentaz-minus', function() {
        var $qty        = $( this ).closest( '.tentaz-quantity' ).find( '.qty'),
            currentVal  = parseFloat( $qty.val() ),
            max         = parseFloat( $qty.attr( 'max' ) ),
            min         = parseFloat( $qty.attr( 'min' ) ),
            step        = $qty.attr( 'step' );

        // Format values
        if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
        if ( max === '' || max === 'NaN' ) max = '';
        if ( min === '' || min === 'NaN' ) min = 0;
        if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

        // Change the value
        if ( $( this ).is( '.tentaz-plus' ) ) {
            if ( max && ( currentVal >= max ) ) {
                $qty.val( max );
            } else {
                $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
            }
        } else {
            if ( min && ( currentVal <= min ) ) {
                $qty.val( min );
            } else if ( currentVal > 0 ) {
                $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
            }
        }

        // Trigger change event
        $qty.trigger( 'change' );
    });

})(jQuery);  


