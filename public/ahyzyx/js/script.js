(function($) {
	"use strict";

	/* Search input toggle show */
	// $('.banner-search').on('click', function(e) {
	// 	console.log(screen.width);
	// 	if(screen.width > 767){
	// 		$('.navbar-collapse').fadeOut('fast');
	// 	}
	// 	$('.banner-search').fadeOut('fast', function() {
	// 		$('.banner-search-form').fadeIn('fast');
	// 		$('.banner-search-close').fadeIn('slow');
	// 		$('.banner-search-form input').focus();
	// 	});
	// 	e.preventDefault();
	// });

	// $('.banner-search-close').on('click', function(e) {
	// 	$('.banner-search-form').fadeOut('fast');
	// 	$(this).fadeOut('fast', function() {
	// 		$('.banner-search').fadeIn('slow');
	// 		if(screen.width > 767){
	// 			$('.navbar-collapse').fadeIn('slow');
	// 		}
	// 	});
	// 	e.preventDefault();
	// });
	/* !Search input toggle show */

	/* Scroll to window top */
	window.scrollTo(window.pageXOffset,window.pageYOffset-1);
	/* !Scroll to window top */

	$('.menu-collapse').on('click', function(){
		$('.navbar').menu-collapse('navbar-open');
	});

	/* Hide Header on on scroll down */
	var didScroll;
	$(window).scroll(function(event){
	    didScroll = true;
	});
	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 250);
	/* !Hide Header on on scroll down */

})(jQuery);

/* Hide Header on on scroll down */
var lastScrollTop = 0;
var delta = 5;

function hasScrolled() {
	var navbarHeight = $(":not(.is-push-bar) .navbar:not(.navbar-open)").outerHeight();
	var navi = $(":not(.is-push-bar) .navbar:not(.navbar-open)");
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        navi.removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            navi.removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
};
/* !Hide Header on on scroll down */


var rNiceScroll = function(){

	var runNiceScroll = function() {
		var nice = $("html").niceScroll(
			{
				height: 'auto',
                wheelStep: 25,
                cursorcolor: "#b7947b",
                cursorborder: "0px solid #fff",
                cursorborderradius: "5px",
                cursorwidth: "7px",
                zindex: "1000000000"
			}
		);
	};

	return {
		init: function(){
			runNiceScroll();
		}
	};
}();