function switchTheme () {
    var stylesheet = document.getElementById('stylesheet');

    if(stylesheet.getAttribute('href')=='./style1.css') {
        stylesheet.setAttribute('href', './style2.css');
    } else {
        stylesheet.setAttribute('href', './style1.css');
    }
}


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  
  showSlides(slideIndex = n);
}

function showSlides(n) {
  
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}



function toggle () {
      
    let element = document.getElementById("mySentence");
    let hidden = element.getAttribute("hidden");

    if (hidden) {
       element.removeAttribute("hidden");
    } else {
       element.setAttribute("hidden", "true");
    }
}