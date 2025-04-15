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
                breakpoint: 850,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});

$(document).ready(function () {
    $(".history-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 3,
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
        lazyLoad: "ondemand",
        prevArrow: '<button class="slick-prev">‹</button>',
        nextArrow: '<button class="slick-next">›</button>',
    });
});

$(document).ready(function () {
    $(".slider3").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        centerMode: false,
        infinite: true,
        pauseOnHover: true,
        pauseOnFocus: true,
        touchMove: true,
        swipe: true,
    });
});

$(document).ready(function () {
    $(".slider4").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        // dots: true,
        centerMode: false,
        infinite: true,
        pauseOnHover: true,
        pauseOnFocus: true,
        touchMove: true,
        swipe: true,
        arrows: true,
        prevArrow:
            '<button style="position: absolute; top: 50%; transform: translateY(-50%); z-index: 10; background: rgba(0, 0, 0, 0.5); color: white; padding-left: 15px; padding-right: 15px; left: 10px; font-size: 32px;">‹</button>',
        nextArrow:
            '<button style="position: absolute; top: 50%; transform: translateY(-50%); z-index: 10; background: rgba(0, 0, 0, 0.5); color: white; padding-left: 15px; padding-right: 15px; right: 10px; font-size: 32px;">›</button>',
    });
});

// FAQS
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach((item) => {
    item.querySelector(".question").addEventListener("click", () => {
        const answer = item.querySelector(".answer");
        const indicator = item.querySelector(".indicator");
        const isOpen = !answer.classList.contains("hidden");

        faqItems.forEach((i) => {
            i.querySelector(".answer").classList.add("hidden");
            i.querySelector(".indicator").textContent = "+";
        });

        if (!isOpen) {
            answer.classList.remove("hidden");
            indicator.textContent = "−";
        }
    });
});

//   toggle guest nav
const openNavBtn = document.getElementById("open-nav");
const closeNavBtn = document.getElementById("close-nav");
const mainNav = document.getElementById("main-nav");
openNavBtn.addEventListener("click", () => {
    mainNav.classList.remove("hidden");
});
closeNavBtn.addEventListener("click", () => {
    mainNav.classList.add("hidden");
});

// disable right click
document.querySelectorAll("img").forEach((img) => {
    img.addEventListener("contextmenu", (event) => {
        event.preventDefault();
    });
});

const date = new Date();
document.getElementById("currentYear").textContent = date.getFullYear();
