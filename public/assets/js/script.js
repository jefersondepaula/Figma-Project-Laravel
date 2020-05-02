$(document).ready(function() {
    imgResponsive();
    $(window).resize(function() {
        imgResponsive();
    });
});

function imgResponsive() {
    if ($(window).width() > 750) {
        $('.bg-intro').attr("src", "../assets/img/welcome-large.png");
        $('.bg-form').attr("src", "../assets/img/login-large.png");
    } else {
        $('.bg-intro').attr("src", "../assets/img/welcome.png");
        $('.bg-form').attr("src", "../assets/img/login.png");
    }
}

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementsByClassName("title-page")[0].style.display = "none";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementsByClassName("title-page")[0].style.display = "block";

}