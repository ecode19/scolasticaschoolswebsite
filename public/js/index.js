$(document).ready(function () {
    $(".slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: true,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
          ],
    });
});

$(document).ready(function () {
    $(".slider2").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: true,
        infinite: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});

$(document).ready(function () {
    $('.history-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 2000,
        // fade: true,
        // cssEase: 'linear',
        arrows: true,
        dots: true,
        pauseOnHover: true,
        pauseOnFocus: true,
        touchMove: true,
        swipe: true,
        lazyLoad: 'ondemand',
        prevArrow: '<button class="slick-prev">‹</button>',
        nextArrow: '<button class="slick-next">›</button>'
    });
});

$(document).ready(function () {
    $(".slider3").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: true,
        infinite: true,
    });
});

const date = new Date();
document.getElementById('currentYear').textContent = date.getFullYear();
