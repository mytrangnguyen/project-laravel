<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
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
  <script src="{{ asset('source/ajaxHandle.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js">
  </script>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

  <!-- <script type="text/javascript" src="/test/wp-content/themes/child/script/jquery.jcarousel.min.js"></script> -->
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
  var listError = [];

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

  <script>
  $("#close-error").click(function() {
    $("#error").hide();
  });
  </script>
  <!-- register -->
  <script>
  $(document).ready(function() {
    var fa = document.getElementById('error');
    fa.style.display = 'none';
    $('#ajaxRegister').click(function(e) {
      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
        }
      });
      $.ajax({
        url: "{{ url('/addNguoidung') }}",
        method: 'post',
        data: {
          username: $('#username').val(),
          email: $('#email').val(),
          address: $('#address').val(),
          phone: $('#phone').val(),
          password: $('#password').val(),
          repassword: $('#repassword').val()
        },
        success: function(result) {
          window.location.href = "/signin";
          console.log("thành công", result);
        },
        error: function(data) {
          if (data) {
            $("#close-error").click(function() {
              $("#error").hide();
            });
            var errors = JSON.parse(data.responseText);
            fa.style.display = 'block';
            console.log("lỗi nha m", errors);
            $.each(errors.errors, function(key, value) {
              console.log("value", value);
              listError.push(value[0]);
              var p = document.createElement('p');
              fa.appendChild(p);
              for (let index = 0; index < listError.length; index++) {
                p.innerHTML = listError[index];
              }
            });
            console.log(listError[0]);
          }

        }
      });
    });
  });
  </script>

  <!-- login -->
  <script>
  $(document).ready(function() {
    console.log("vào");
    // var fa = document.getElementById('error');
    // fa.style.display = 'none';
    $('#ajaxLogin').click(function(e) {
      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
        }
      });
      $.ajax({
        url: "{{ url('/dang-nhap') }}",
        method: 'get',
        data: {
          email: $('#email').val(),
          password: $('#password').val(),
        },
        success: function(result) {
          // window.location.href = "/";
          console.log("login thành công", result);
        },
        error: function(data) {
          console.log("lỗi login", data);
        }
      });
    });
  });
  </script>

</body>

</html>