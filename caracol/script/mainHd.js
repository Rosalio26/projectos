//alert('Working');

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
    setTimeout(showSlides, 2990);
}

let couter = 1;
setInterval(function(){
    document.getElementById('radio' + couter).checked = true;
    couter ++;
    if(couter>3) {
        couter = 1;
    }
}, 3000);