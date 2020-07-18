//  for index
// var slideIndex = 1;

// function plusSlides(n) {
//     clearInterval(myTimer);
//     if (n < 0) {
//         showSlides(slideIndex -= 1);
//     } else {
//         showSlides(slideIndex += 1);
//     }
//     if (n === -1) {
//         myTimer = setInterval(function() { plusSlides(n + 2) }, 4000); //  set time to run slide in 4 second
//     } else {
//         myTimer = setInterval(function() { plusSlides(n + 1) }, 4000);
//     }
// }

// function currentSlide(n) {
//     clearInterval(myTimer);
//     myTimer = setInterval(function() { plusSlides(n + 1) }, 4000);
//     showSlides(slideIndex = n);
// }

// function showSlides(n) {
//     var i;
//     var slides = document.getElementsByClassName("mySlides");
//     var dots = document.getElementsByClassName("dot");
//     if (n > slides.length) { slideIndex = 1 }
//     if (n < 1) { slideIndex = slides.length }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].className += " active";
// }

// window.addEventListener("load", function() {
//     showSlides(slideIndex);
//     myTimer = setInterval(function() { plusSlides(1) }, 4000);
// })


//login modal

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("login-button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}