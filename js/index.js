var $1 = document.querySelector.bind(document)
var $$ = document.querySelectorAll.bind(document)

// slider
var slider = $1('.highlight__slider')
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
var openEditCustomer = $1('.edit-customer__open')
if(openEditCustomer) {
    var editCustomer = $1('.edit-customer')
    openEditCustomer.onclick = function() {
        editCustomer.style.transform = 'translateX(0)'
    }
    $1('.edit-customer__close').onclick = function() {
        editCustomer.style.transform = 'translateX(110%)'
    } 
}

// Changepass
var openChangePass = $1('.changepass__open')
if(openChangePass) {
    var changePass = $1('.changepass')
    openChangePass.onclick = function() {
        changePass.style.transform = 'translateX(0)';
    }
    $1('.changepass__close').onclick = function() {
        changePass.style.transform = 'translateX(110%)';
    } 
}


// Model
var modelControls = $$('.model-control')
if(modelControls) {
    if($1('.js-login')) $1('.js-login').onclick = function() {
        $1('.model').style.display = 'flex';
    }
    $1('.js-login-mb').onclick = function() {
        $1('.model').style.display = 'flex';
    }
    $1('.model-overlay').onclick = function() {
        $1('.model').style.display = 'none';
    }
    var modelForms = $$('.model-body-form')
    modelControls.forEach((modelControl, index) => {
        const modelForm = modelForms[index]
        
        modelControl.onclick = function() {
            $1('.model-control.active').classList.remove('active')
            $1('.model-body-form.active').classList.remove('active')
    
            this.classList.add('active')
            modelForm.classList.add('active');
        }
    })
}

// Show imgSmall Product
var imgProductBlock = $1('.product-block')
if(imgProductBlock) {
    var imgsSmall = $$('.product-small-block')
    imgsSmall.forEach(imgSmall => {
        imgSmall.onclick = function() {
            if($1('.product-small-block.active')) $1('.product-small-block.active').classList.remove('active') 
            var imgSrc = this.querySelector('.product-img-small').getAttribute('src')
            imgProductBlock.querySelector('img').setAttribute('src', imgSrc)
            this.classList.add('active')
        }
    })
}
  





