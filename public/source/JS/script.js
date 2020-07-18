$('.slick-list').on('afterChange', function (event, slick, currentSlide) {
    if (currentSlide === 1) {
        $('.slick-prev').css("opacity", "1");
    }
    if (currentSlide === 3) {
        $('.slick-next').css("opacity", "0.5");
    } else {
        $('.slick-next').css("opacity", "1");
    }
    if (currentSlide === 0) {
        $('.slick-prev').css("opacity", "0.5");
    }

    console.log('afterChange, currentSlide: ', currentSlide);
});

// $('.slick-list').slick({
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     infinite: false,
//     nextArrow: $('.slick-next'),
//     prevArrow: $('.slick-prev'),
//     responsive: [{
//         breakpoint: 1024,
//         settings: {
//             slidesToShow: 3,
//             slidesToScroll: 3,
//             infinite: false,
//         }
//     }, {
//         breakpoint: 600,
//         settings: {
//             slidesToShow: 3,
//             slidesToScroll: 2
//         }
//     }, {
//         breakpoint: 480,
//         settings: {
//             slidesToShow: 1.5,
//             slidesToScroll: 1
//         }
//     }]
// });

$('.image-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.slick-next-endow'),
    prevArrow: $('.slick-prev-endow'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.letgo-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.letgo-slick-next'),
    prevArrow: $('.letgo-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.row-letgo-danang').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.danang-slick-next'),
    prevArrow: $('.danang-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.row-letgo-top1000').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.top1000-slick-next'),
    prevArrow: $('.top1000-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.vinhomes-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.vinhomes-slick-next'),
    prevArrow: $('.vinhomes-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.row-item-top-places').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.slick-next-recommend'),
    prevArrow: $('.slick-prev-recommend'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.wrapper-hdsd').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: $('.guide-slick-next'),
    prevArrow: $('.guide-slick-prev'),
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.letgo-wrapper').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1
        }
    }]
});

$('.menu-toggle').click(function () {
    $('.menu-toggle').toggleClass('active')
    $('.navbar-collapse').toggleClass('active')
})

$('.box-product-wrapper').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplaySpeed: 2000,
    nextArrow: $('.next-p'),
    prevArrow: $('.prev-p'),
});

var slideIndex = 1;

function plusSlides(n) {
    clearInterval(myTimer);
    if (n < 0) {
        showSlides(slideIndex -= 1);
    } else {
        showSlides(slideIndex += 1);
    }
    if (n === -1) {
        myTimer = setInterval(function () {
            plusSlides(n + 2)
        }, 4000);
    } // set time to run slide in 4 second  
    else {
        myTimer = setInterval(function () {
            plusSlides(n + 1)
        }, 4000);
    }
}

function currentSlide(n) {
    clearInterval(myTimer);
    myTimer = setInterval(function () {
        plusSlides(n + 1)
    }, 4000);
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
window.addEventListener("load", function () {
    showSlides(slideIndex);
    myTimer = setInterval(function () {
        plusSlides(1)
    }, 4000);
})