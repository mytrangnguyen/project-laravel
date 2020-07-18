<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('source/CSS/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('source/CSS/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('source/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('source/responsive.css') }}" />
    <title>Home-page</title>
</head>

<body>
    @include('header')
    <div class="container-fluid">
        @yield('content')
    </div>
    @include('footer')
    <script src="{{ asset('source/JS/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('source/javascript.js') }}"></script>
    <script src="{{ asset('source/JS/script.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
    $('.box-product-wrapper').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        nextArrow: $('.next-p'),
        prevArrow: $('.prev-p'),
    });
    </script>
    <script>
    var slideIndex = 1;

    function plusSlides(n) {
        clearInterval(myTimer);
        if (n < 0) {
            showSlides(slideIndex -= 1);
        } else {
            showSlides(slideIndex += 1);
        }
        if (n === -1) {
            myTimer = setInterval(function() {
                plusSlides(n + 2)
            }, 4000);
        } // set time to run slide in 4 second  
        else {
            myTimer = setInterval(function() {
                plusSlides(n + 1)
            }, 4000);
        }
    }

    function currentSlide(n) {
        clearInterval(myTimer);
        myTimer = setInterval(function() {
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
    window.addEventListener("load", function() {
        showSlides(slideIndex);
        myTimer = setInterval(function() {
            plusSlides(1)
        }, 4000);
    })
    </script>

</body>

</html>