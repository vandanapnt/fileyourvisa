// jquery
$(document).ready(function () {
    var headerHight = $(".header").height();
    $(".navbarHeight").height(headerHight);

    $(".searchTrigr,.cancelSearch").click(function () {
        $(".search").slideToggle();
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= headerHight) {
            $(".mobileFooteShow .search").slideUp();
        }
    });
    $('.bannerSlider').slick({
        dots: true,
        infinite: false,
        speed: 600,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.productSlide').slick({
        dots: false,
        infinite: true,
        speed: 600,
        arrows: true,
        autoplay: false,
        fade: false,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },


        ]
    });

});


