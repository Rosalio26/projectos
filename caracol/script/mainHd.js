// alert('Working');

let slideIndex = 0;
showSlides ();

function showSlides() {
    let intSlide;
    let slides = document.getElementsByClassName("slideJes");
    
    for (intSlide = 0; intSlide < slides.length; intSlide++) {
        slides[intSlide].style.display = "none";
    }
    slideIndex ++;
    if (slideIndex > slides.length) {slideIndex = 1}

    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000);
}