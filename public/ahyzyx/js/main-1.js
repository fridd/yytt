var Main = function() {
	"use strict";

	var runNavDropdown = function() {
		if($('.MainNav .dd').length){
    		$(".MainNav .dd").hover(
        		function() { $('.dropdown-menu', this).fadeIn("fast");
        	},
        function() { $('.dropdown-menu', this).fadeOut("fast");
   		 });
		}
	};
	
	var runNavDropdown1 = function() {
		var nice = $("html").niceScroll(
			{
				height: 'auto',
                wheelStep: 25,
                cursorcolor: "#b7947b",
                cursorborder: "0px solid #fff",
                cursorborderradius: "5px",
                cursorwidth: "7px",
                zindex: 99999
			}
		);
	};

	return {
		//main function to initiate template pages
		init : function() {
			runNavDropdown();
			//runNavDropdown1();
		}
	};
}();

 //jQuery(function($) {
 	//$(document).ready(function() {
 		//$('#REPNavbar').stickUp();
 	//});
 //});
