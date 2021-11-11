var slideIndex = 1;
showSlides(slideIndex);
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("highlights__slider-img");
    var dots = document.getElementsByClassName("highlight__slider-control-btn");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

var aElements = document.links;
for(var i = 0; i < aElements.length; ++i){
    aElements[i].onclick = function(e) {
        if(!e.target.href.startsWith('#')){
            e.preventDefault();
        }
    }
}


// Model
var $ = document.querySelector.bind(document);
var $$ = document.querySelectorAll.bind(document);
$('.js-login').onclick = function() {
    $('.model').style.display = 'flex';
}
$('.js-login-mb').onclick = function() {
    $('.model').style.display = 'flex';
}
$('.model-overlay').onclick = function() {
    $('.model').style.display = 'none';
}



var modelControls = $$('.model-control')
var modelForms = $$('.model-body-form')
modelControls.forEach((modelControl, index) => {
    const modelForm = modelForms[index]
    
    modelControl.onclick = function() {
        $('.model-control.active').classList.remove('active')
        $('.model-body-form.active').classList.remove('active')

        this.classList.add('active')
        modelForm.classList.add('active');
    }
})