$(document).ready(function () {
    $('.gallery-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.artist-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.event-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.testimonials-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('a.nav-toggle-button').click(function(e){
        e.preventDefault();
        $('.sidebar').addClass('show-sidebar');
    })

    $('.sidebar-close a').click(function(){
        e.preventDefault();
        $('.sidebar').removeClass('show-sidebar');
    })
});