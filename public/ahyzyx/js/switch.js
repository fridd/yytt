var rSwitch = function(){
	"use strict";

	var runSwitch = function(){
		$('.ticket-list .col-sm-3 a').click(function() {
			$(this).addClass('active').siblings().removeClass('active');
			var $str = $(this).attr('data-item');
			var $str2 = $(this).siblings().attr('data-item');
			$('.ticket-list .list-content > div').removeClass($str2).addClass($str);
		});
	};

	var intervalClick = function(){
		setTimeout(function(){
			$('.hot-show #filters button:first-child').click();
		},0);
		setInterval(function(){
			var str = $('.hot-show #filters button.active');
			str.removeClass('active').next().addClass('active').click();
			if (str.attr('data-order') == 3) {
				str.removeClass('active');
				$('.hot-show #filters button:nth-child(1)').addClass('active').click();
			}
		},3000);
		$.each($('.hot-show #filters button'), function() {
		 	$(this).click(function() {
				$(this).addClass('active').siblings().removeClass('active');
		 	});
		});
	};

	return {
		init: function(){
			runSwitch();
			intervalClick();
		}
	};
}();