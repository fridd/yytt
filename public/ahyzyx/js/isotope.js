var rIsotope = function(){
	"use strict";

	var runIsotope = function(){
		var $container = $('.isotope').isotope({
	        itemSelector: '.masonry_item'
	    });
	    $('#filters').on('click', 'button', function () {
	        var filterValue = $(this).attr('data-filter');
	        $container.isotope({ filter: filterValue });
	    });
	};
	return {
		init: function(){
			runIsotope();
		}
	};
}();