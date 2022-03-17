$=jQuery
jQuery(document).ready(function () {

    // slider
    var owllogo = $(".owl-slider-demo, .unique-post-slider");
    owllogo.owlCarousel({
        items:1,
        loop:true,
        nav:false,
        dots:true,
        smartSpeed:900,
        autoplay:true,
        autoplayTimeout:5000,
        fallbackEasing: 'easing',
        transitionStyle : "fade",
        autoplayHoverPause:true,
        animateOut: 'fadeOut'
    });


    // search toggle
    var removeClass = true;
    $(".search-icon").click(function () {
      $(".search-section").toggleClass('search-open');
		setTimeout(function(){
            $(".search-section").find('.search-header input').focus();
            }, 700 );
      removeClass = false;
		
    });

    // when clicking the div : never remove the class
    $(".search-header input").click(function() {
      removeClass = false;
    });

    // when click event reaches "html" : remove class if needed, and reset flag
    $("html, .close-icon").click(function () {
      if (removeClass) {
          $(".search-section").removeClass('search-open');
      }
      removeClass = true;
    });

    jQuery('.menu-top-menu-container').meanmenu({
        meanMenuContainer: '.main-navigation',
        meanScreenWidth:"767",
        meanRevealPosition: "right",
    });

    /* back-to-top button*/
    $('.back-to-top').hide();
    $('.back-to-top').on("click",function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 'slow');
    });


    $(window).scroll(function(){
        var scrollheight =400;
        if( $(window).scrollTop() > scrollheight ) {
            $('.back-to-top').fadeIn();
        }
        else {
            $('.back-to-top').fadeOut();
        }
    });

    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })

    // sticky sidebar
    jQuery('#primary , #secondary').theiaStickySidebar({
          // Settings
        additionalMarginTop: 30
    });
    var windowWidth = jQuery(window).width();
    var nav = ".main-navigation";
    if (windowWidth > 1023) {
        jQuery(nav).off('mouseenter', 'li');
        jQuery(nav).off('mouseleave', 'li');
        jQuery(nav).off('click', 'li');
        jQuery(nav).off('click', 'a');
        jQuery(nav).on('mouseenter', 'li', function() {
            jQuery(this).children('ul').stop().hide();
            jQuery(this).children('ul').slideDown(400);
        });
        jQuery(nav).on('mouseleave', 'li', function() {
            jQuery(this).children('ul').stop().slideUp(350);
        });
    }
    //keyboard navigation for mean menu
    var myEvents = {
        click: function(e) {
            if ( jQuery(this).hasClass('menu-item-has-children') ) {
            jQuery(this).find('.mean-expand').addClass('mean-clicked');
            }
            jQuery(this).siblings('li').find('.mean-expand').removeClass('mean-clicked');
            jQuery(this).children('.sub-menu').show().end().siblings('li').find('ul').hide();

        },

        keydown: function(e) {
            e.stopPropagation();
            if (e.keyCode == 9) {
                if (!e.shiftKey &&
                ( jQuery('.mean-bar li').index( jQuery(this) ) == ( jQuery('.mean-bar li').length-1 ) ) ){
                    jQuery('.meanclose').trigger('click');
                }  else if( jQuery('.mean-bar li').index( jQuery(this) ) == 0 ) {
                    $('.meanclose').removeClass('onfocus');
                }
                else if (e.shiftKey && jQuery('.mean-bar li').index(jQuery(this)) === 0)
                    jQuery('.mean-bar ul:first > li:last').focus().blur();
            }
        },

        keyup: function(e) {
            e.stopPropagation();
            if (e.keyCode == 9) {
                if (myEvents.cancelKeyup) myEvents.cancelKeyup = false;
                else myEvents.click.apply(this, arguments);
            }
        }
    }
    jQuery(document)
    .on('click', 'li', myEvents.click)
    .on('keydown', 'li', myEvents.keydown)
    .on('keyup', 'li', myEvents.keyup);
    jQuery('.mean-bar li').each(function(i) { this.tabIndex = i; });      
});

    $('.top-menu-toggle_bar_wrapper').on('click', function(){
      $(this).toggleClass('close');
      $(this).siblings('.top-menu-toggle_body_wrapper').slideToggle().toggleClass('hide-menu');
    });

    $(window).resize(function(){
        var winWidth = $(window).width();
        if(winWidth>1023){
            $('.top-menu-toggle_body_wrapper').remove('style');
            $('.top-menu-toggle_bar_wrapper').removeClass('close');
        }
    });


