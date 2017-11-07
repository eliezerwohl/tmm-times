jQuery(document).ready(function($) {

    
    function mobileFix() {
        var mobileFix = $(".mobile-fix");
        if ((window.innerWidth <= 767) && (mobileFix.hasClass("nav-justified"))) {
            mobileFix.removeClass("nav-justified").addClass("navbar-nav");
        } else if ((window.innerWidth > 767) && (mobileFix.hasClass("navbar-nav"))) {
            mobileFix.removeClass("navbar-nav").addClass("nav-justified");
        }
    }
    mobileFix();
    $(window).resize(function() {
        mobileFix();
    })

    
})