$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $("nav").addClass("myClass");
    } else {
        $("nav").removeClass("myClass");
    }
});

$(function () {
    AOS.init({
        once: true, // whether animation should happen only once - while scrolling down
    });
});

$(function () {
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
});

$(function () {
    function myFunction(x) {
        if (x.matches) {
            // If media query matches
            const navLinks = document.querySelectorAll(".nav-item");
            const menuToggle = document.getElementById("navbarNavAltMarkup");
            const bsCollapse = new bootstrap.Collapse(menuToggle, {
                toggle: false,
            });
            navLinks.forEach((l) => {
                l.addEventListener("click", () => {
                    bsCollapse.toggle();
                });
            });
        }
    }

    var x = window.matchMedia("(max-width: 991.98px)");
    myFunction(x); // Call listener function at run time
    x.addListener(myFunction); // Attach listener function on state changes
});
