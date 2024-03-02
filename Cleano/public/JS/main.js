

function showSubmenu() {
    var submenu = document.querySelector('.sub_menu_dropdown');
    submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
}



// ============= slider  product ========== 
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex + n);
}

function currentSlide(n) {
    showSlides(n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");

    // Ensure slide index stays within bounds
    if (n > slides.length) {
        slideIndex = slides.length;
    } else if (n < 1) {
        slideIndex = 1;
    } else {
        slideIndex = n;
    }

    // Hide all slides
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Display the current slide
    slides[slideIndex - 1].style.display = "block";
}


// ====== slider services =======
// ====== slider services =======

let slideIndex_ser = 1;
showSlides_ser(slideIndex_ser);

function plusSlides_ser(m) {
    showSlides_ser(slideIndex_ser + m);
}

function currentSlide_ser(m) {
    showSlides_ser(m);
}

function showSlides_ser(m) {
    let s;
    let slides_ser = document.getElementsByClassName("mySlides_service");

    // Ensure slide index stays within bounds
    if (m > slides_ser.length) {
        slideIndex_ser = slides_ser.length;
    } else if (m < 1) {
        slideIndex_ser = 1;
    } else {
        slideIndex_ser = m;
    }

    // Hide all slides
    for (s = 0; s < slides_ser.length; s++) {
        slides_ser[s].style.display = "none";
    }

    // Display the current slide
    slides_ser[slideIndex_ser - 1].style.display = "block";
}


// ===================  vendor  details   popup  ============

function showDocImg()
{
    var docuPo = document.querySelector('.documnet_popup_section ');
    docuPo.style.display = "block";
}

function closeDocuPop()
{
    var docuPo = document.querySelector('.documnet_popup_section ');
    docuPo.style.display = "none";
}



// ========= tabs script ===

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    // console.log(tabcontent);

    tablinks = document.getElementsByClassName("tablinks");
    // console.log(tablinks);

    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();


