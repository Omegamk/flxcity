function toggleResetPswd(e) {
    e.preventDefault();
    $("#logreg-forms .form-signin").toggle(); // display:block or none
    $("#logreg-forms .form-reset").toggle(); // display:block or none
}

function toggleSignUp(e) {
    e.preventDefault();
    $("#logreg-forms .form-signin").toggle(); // display:block or none
    $("#logreg-forms .form-signup").toggle(); // display:block or none
}

$(() => {
    // Login Register Form
    $("#logreg-forms #forgot_pswd").click(toggleResetPswd);
    $("#logreg-forms #cancel_reset").click(toggleResetPswd);
    $("#logreg-forms #btn-signup").click(toggleSignUp);
    $("#logreg-forms #cancel_signup").click(toggleSignUp);
});


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}

// drop-down of sub categories section
function dropdown() {
    document.getElementById("dropdown-budget").classList.toggle("show");
}

function hide() {
    document.getElementById("dropdown-budget").classList.toggle("hide");
}

function clear() {
    document.getElementsById("input").value = "";
}

// settings ul >li border-left




// drop-down of sub categories section

//profile form category selection code

//  let subcategory = {
//             Web Developer: ["frontend developer", "back end deveoper", "Wordpress"],
//             Graphics Desinger: ["Logo Designer", "Photoshop editor", "Animations"]
//         }

//         function makeSubmenu(value) {
//             if (value.length == 0) document.getElementById("categorySelect").innerHTML = "<option></option>";
//             else {
//                 let citiesOptions = "";
//                 for (form-categoryId in subcategory[value]) {
//                     citiesOptions += "<option>" + subcategory[value][form-categoryId] + "</option>";
//                 }
//                 document.getElementById("form-categorySelect").innerHTML = citiesOptions;
//             }
//         }

//         function displaySelected() {
//             let country = document.getElementById("form-category").value;
//             let city = document.getElementById("categorySelect").value;
//             alert(country + "\n" + city);
//         }

//         function resetSelection() {
//             document.getElementById("category").selectedIndex = 0;
//             document.getElementById("categorySelect").selectedIndex = 0;
//         }

//login options
