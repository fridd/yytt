//交易会首页
var Spaf = function() {
	"use strict";

	var runSlider = function() {
		$("#owl-SpafSlider").owlCarousel({
      		navigation : true,
      		slideSpeed : 300,
      		paginationSpeed : 400,
      		autoPlay: 3500,
      		singleItem : true
      	});
      	
      	$("#owl-MuPic1").owlCarousel({
        	autoPlay: 3000,
        	items : 7,
        	pagination:true,
        	itemsCustom : [
        					[0, 2],
        					[450, 2],
        					[600, 4],
        					[700, 4],
        					[1000, 7],
        					[1200, 7],
        					[1400, 7],
        					[1600, 7]
        				]
		});
	};
	
	return {
		//main function to initiate template pages
		init : function() {
			runSlider();
		}
	};
}();
//交易会上传页面
var SpafUpload = function() {
	"use strict";

	var runAutosize = function() {
		$("textarea.autosize").autosize();
	};
	
	var runDatePicker = function() {
		$('.date-picker').datepicker({
			autoclose: true
		});
	};

//    var runValidate = function() {
//        $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
//    };

	
	return {
		init : function() {
			runAutosize();
			runDatePicker();
//			runValidate();
		}
	};
}();