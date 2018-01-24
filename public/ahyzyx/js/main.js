var main = function(){
	"use strict";

	var runJPlayer = function(){
		JplayerVideo.init();
	};

	/*var runOwlCarousel = function(){
        var owl = $("#owl-demo");
        owl.owlCarousel({
            autoPlay: 3000,
            items: 4, //10 items above 1000px browser width
            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 4], // 3 items betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0;
            itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
        });
	};*/

	var runWow = function(){
		new WOW().init();
	};

    var runCalendar = function(){
        $("#calendar-widget").zabuto_calendar({
            today: true,
        	//year: 2016,
        	//month: 10,
        	show_previous: false,
        	//show_next: 1,
        	action: function () {
                return myDateFunction(this.id, false);
            }
        });
    };
    
    function myDateFunction(id) {
    	var date = $("#" + id).data("date");
    	window.open("http://www.artsbird.com/TICKET/product/schedule/" + date + ".jhtml");
    }
    
    var runSwipe = function(){
        $(".carousel").swipe({
            swipeLeft:function(event, direction, distance, duration, fingerCount){
                $('.right').trigger('click');
            },
            swipeRight:function(event, direction, distance, duration, fingerCount) {
                $('.left').trigger('click');
            }
        });
    };

	var defaultSet = function(){
		// detect if IE : from http://stackoverflow.com/a/16657946
        var ie = (function () {
            var undef, rv = -1; // Return value assumes failure.
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf('MSIE ');
            var trident = ua.indexOf('Trident/');

            if (msie > 0) {
                // IE 10 or older => return version number
                rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
            } else if (trident > 0) {
                // IE 11 (or newer) => return version number
                var rvNum = ua.indexOf('rv:');
                rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
            }

            return ((rv > -1) ? rv : undef);
        }());

        // disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179
        // left: 37, up: 38, right: 39, down: 40,
        // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
        var keys = [37, 38, 39, 40], wheelIter = 0;

        function preventDefault(e) {
            e = e || window.event;
            if (e.preventDefault)
                e.preventDefault();
            e.returnValue = false;
        }

        function keydown(e) {
            for (var i = keys.length; i--;) {
                if (e.keyCode === keys[i]) {
                    preventDefault(e);
                    return;
                }
            }
        }

        function touchmove(e) {
            /*preventDefault(e);*/
        }

        function wheel(e) {
            // for IE
            //if( ie ) {
            //preventDefault(e);
            //}
        }

        function disable_scroll() {
            window.onmousewheel = document.onmousewheel = wheel;
            document.onkeydown = keydown;
            document.body.ontouchmove = touchmove;
        }

        function enable_scroll() {
            window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;
        }

        var docElem = window.document.documentElement,
			scrollVal,
			isRevealed,
			noscroll,
			isAnimating,
			container = document.getElementById('container'),
			trigger = container.querySelector('a.caption-more');

        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }

        function scrollPage() {
            scrollVal = scrollY();
            if (noscroll && !ie) {
                if (scrollVal < 0) return false;
                // keep it that way
                window.scrollTo(0, 0);
            }
            if (classie.has(container, 'notrans')) {
                classie.remove(container, 'notrans');
                return false;
            }
            if (isAnimating) {
                return false;
            }
            if (scrollVal <= 0 && isRevealed) {
                toggle(0);
            }
            else if (scrollVal > 0 && !isRevealed) {
                toggle(1);
            }
        }
        
        function toggle(reveal) {
            isAnimating = true;
            if (reveal) {
                classie.add(container, 'modify');
                $('.banner-bottom').fadeOut('slow');
                $('.banner-mod > .carousel > .carousel-control').fadeOut('slow');
                $('.banner-mod > .carousel > .caption-more').fadeOut('slow');
            }
            else {
                noscroll = true;
                disable_scroll();
                classie.remove(container, 'modify');
                classie.remove(container, 'no-fixed');
                $('.banner-bottom').fadeIn('slow');
                //$('.carousel-control').fadeIn('slow');
            }
            // simulating the end of the transition:
            setTimeout(function () {
                isRevealed = !isRevealed;
                isAnimating = false;
                if (reveal) {
                    noscroll = false;
                    enable_scroll();
                    classie.add(container, 'no-fixed');
                } else {
                    $('.banner-mod > .carousel > .carousel-control').fadeIn('slow');
                    $('.banner-mod > .carousel > .caption-more').fadeIn('slow');
                }
            }, 1200);
        }
        // refreshing the page...
        var pageScroll = scrollY();
        noscroll = pageScroll === 0;

        disable_scroll();

        if (pageScroll) {
            isRevealed = true;
            classie.add(container, 'notrans');
            classie.add(container, 'modify');
            $('.banner-bottom').fadeOut('slow');
        }

        window.addEventListener('scroll', scrollPage);

        $('a.caption-more').click(function (e) {
            toggle('reveal');
            e.preventDefault();
        });
        $(".item .item-cover").swipe({
            swipeUp: function (event, direction, distance, duration, fingerCount) {
                toggle('reveal');
            }
        });
	};

	return {
		init: function(){
			runJPlayer();
			//runOwlCarousel();
			runWow();
            runCalendar();
            runSwipe();
			defaultSet();
		}
	};
}();