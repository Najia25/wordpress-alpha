// JavaScript Document

jQuery(window).load(function () {
    "use strict";
    // makes sure the whole site is loaded
    jQuery('#status').fadeOut(); // will first fade out the loading animation
    jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    jQuery('body').delay(350).css({
        'overflow': 'visible'
    });
})

jQuery(document).ready(function () {
    "use strict";

    // scroll menu
    var sections = jQuery('.section'),
        nav = jQuery('.navbar-fixed-top,footer'),
        nav_height = nav.outerHeight();

    jQuery(window).on('scroll', function () {
        var cur_pos = jQuery(this).scrollTop();

        sections.each(function () {
            var top = jQuery(this).offset().top - nav_height,
                bottom = top + jQuery(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a').removeClass('active');
                sections.removeClass('active');

                jQuery(this).addClass('active');
                nav.find('a[href="#' + jQuery(this).attr('id') + '"]').addClass('active');
            }
        });
    });

    nav.find('a').on('click', function () {
        var jQueryel = jQuery(this),
            id = jQueryel.attr('href');

        jQuery('html, body').animate({
            scrollTop: jQuery(id).offset().top - nav_height + 2
        }, 600);

        return false;
    });


    // Menu opacity
    if (jQuery(window).scrollTop() > 80) {
        jQuery(".navbar-fixed-top").addClass("bg-nav");
    } else {
        jQuery(".navbar-fixed-top").removeClass("bg-nav");
    }
    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 80) {
            jQuery(".navbar-fixed-top").addClass("bg-nav");
        } else {
            jQuery(".navbar-fixed-top").removeClass("bg-nav");
        }
    });



    // Parallax
    var parallax = function () {
        jQuery(window).stellar();
    };

    jQuery(function () {
        parallax();
    });

    // AOS
    AOS.init({
        duration: 1200,
        once: true,
        disable: 'mobile'
    });

    //  isotope
    jQuery('#projects').waitForImages(function () {
        var jQuerycontainer = jQuery('.portfolio_container');
        jQuerycontainer.isotope({
            filter: '*',
        });

        jQuery('.portfolio_filter a').click(function () {
            jQuery('.portfolio_filter .active').removeClass('active');
            jQuery(this).addClass('active');

            var selector = jQuery(this).attr('data-filter');
            jQuerycontainer.isotope({
                filter: selector,
                animationOptions: {
                    duration: 500,
                    animationEngine: "jquery"
                }
            });
            return false;
        });

    });

    //animatedModal
    jQuery("#demo01,#demo02,#demo03,#demo04,#demo05,#demo06,#demo07,#demo08,#demo09").animatedModal();

    // Contact Form 	

    // validate contact form
    jQuery(function () {
        jQuery('#contact-form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true
                },
                phone: {
                    required: false
                },
                message: {
                    required: true
                }

            },
            messages: {
                name: {
                    required: "This field is required",
                    minlength: "your name must consist of at least 2 characters"
                },
                email: {
                    required: "This field is required"
                },
                message: {
                    required: "This field is required"
                }
            },
            submitHandler: function (form) {
                jQuery(form).ajaxSubmit({
                    type: "POST",
                    data: jQuery(form).serialize(),
                    url: "process.php",
                    success: function () {
                        jQuery('#contact :input').attr('disabled', 'disabled');
                        jQuery('#contact').fadeTo("slow", 1, function () {
                            jQuery(this).find(':input').attr('disabled', 'disabled');
                            jQuery(this).find('label').css('cursor', 'default');
                            jQuery('#success').fadeIn();
                        });
                    },
                    error: function () {
                        jQuery('#contact').fadeTo("slow", 1, function () {
                            jQuery('#error').fadeIn();
                        });
                    }
                });
            }
        });

    });
});