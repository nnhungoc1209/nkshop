var slideIndex = 1;
showSlide(slideIndex);

//Prev, Next
function plusSlide(n) {
    slideIndex += parseInt(n);
    showSlide(slideIndex);
}

//Thumbnail
function currentSlide(n) {
    slideIndex = parseInt(n);
    showSlide(slideIndex);
}

function showSlide(n) {
    var i;
    var slides = document.getElementsByClassName('img-slides');
    var dots = document.getElementsByClassName('img-thumbnail');

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = 'img-thumbnail';
    }

    slides[slideIndex - 1].style.display = 'block';
    dots[slideIndex - 1].className = 'img-thumbnail active';
}