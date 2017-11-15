jQuery(document).ready(function($) {
	//hover menu
	$('.dropdown').mouseenter(function() {
		if (window.innerWidth > 767){
			$('.dropdown-menu').stop(true, true).slideUp(500)
			$(this).find('.dropdown-menu').stop(true, true).delay(200).slideDown(500);
		}
	})
    $('.dropdown').mouseleave(function() {
        if (window.innerWidth > 767){
            $('.dropdown-menu').slideUp(500)
        }
    })
    function mobileFix() {
        var mobileFix = $(".mobile-fix");
        if (window.innerWidth <= 767){
        	//full size to mobile js fix
        		$('.dropdown-menu').stop(true, true).css("display", "");
        }
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