var rCustom = function(){
	"use strict";

	var runCustomClick = function(){
		$('#filters button').click(function() {
			$(this).addClass('active').siblings().removeClass('active');
		});
		$('#main-nav > ul > li').click(function() {
			$('#main-nav > ul > li').removeClass('active');
			$(this).addClass('active');
		});

		$('.ticketOrder a.address').click(function() {
			if ($('.new-address').hasClass('no-display')) {
				$('.new-address').removeClass('no-display');
			}else{
				$('.new-address').addClass('no-display');
			}
			return false;
		});
		$('.ticketOrder .new-address a.btn-default').click(function() {
			$('.new-address').addClass('no-display');
			return false;
		});
	};

	return {
		init: function(){
			runCustomClick();
		}
	};
}();