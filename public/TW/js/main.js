;
(function () {

    'use strict';

    var carousels = function () {
        $(".owl-carousel1").owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                800: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 3,
                    nav: true
                }

            }
        });
        $(".owl-carousel3").owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            dots: false,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 5,
                    nav: false
                },
                800: {
                    items: 7,
                    nav: true
                },
                1000: {
                    items: 7,
                    nav: true
                }

            }
        });
        $(".owl-carousel2").owlCarousel({
            loop: true,
            center: false,
            margin: 0,
            responsiveClass: true,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: true
                }
            }
        });
    }
    // svg responsive in mobile mode
    var checkPosition = function () {
        if ($(window).width() < 767) {
            $("#bg-services").attr("viewBox", "0 0 1050 800");

        }
    };

    (function ($) {
        carousels();
        checkPosition();
    })(jQuery);


}());

window.onscroll = function() {
    myFunction()
};