$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $("nav").addClass("myClass");
    } else {
        $("nav").removeClass("myClass");
    }
});
