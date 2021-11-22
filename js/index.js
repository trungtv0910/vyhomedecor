var $ = document.querySelector.bind(document)
var $$ = document.querySelectorAll.bind(document)

// slider
var slider = $('.highlight__slider')
if(slider) {
    var slides = $$(".highlights__slider-img");
    var dots = $$(".highlight__slider-control-btn");
    var slideIndex = 1;
    showSlides(slideIndex);
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
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
}

// Edit customer
var openEditCustomer = $('.edit-customer__open')
if(openEditCustomer) {
    var editCustomer = $('.edit-customer')
    openEditCustomer.onclick = function() {
        editCustomer.style.transform = 'translateX(0)'
    }
    $('.edit-customer__close').onclick = function() {
        editCustomer.style.transform = 'translateX(110%)'
    } 
}

// Changepass
var openChangePass = $('.changepass__open')
if(openChangePass) {
    var changePass = $('.changepass')
    openChangePass.onclick = function() {
        changePass.style.transform = 'translateX(0)';
    }
    $('.changepass__close').onclick = function() {
        changePass.style.transform = 'translateX(110%)';
    } 
}


// Model
var modelControls = $$('.model-control')
if(modelControls) {
    $('.js-login').onclick = function() {
        $('.model').style.display = 'flex';
    }
    $('.js-login-mb').onclick = function() {
        $('.model').style.display = 'flex';
    }
    $('.model-overlay').onclick = function() {
        $('.model').style.display = 'none';
    }
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
}

// Show imgSmall Product
var imgProductBlock = $('.product-block')
if(imgProductBlock) {
    var imgsSmall = $$('.product-small-block')
    imgsSmall.forEach((imgSmall, index) => {
        imgSmall.onclick = function() {
            if($('.product-small-block.active')) $('.product-small-block.active').classList.remove('active') 
            var imgSrc = this.querySelector('.product-img-small').getAttribute('src')
            imgProductBlock.querySelector('img').setAttribute('src', imgSrc)
            this.classList.add('active')
        }
    })
}
  





