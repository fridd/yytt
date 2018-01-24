var Slider = function() {
	// "use strict";

	var runSlider = function() {
		$("#owl-homeSlider").owlCarousel({
            navigation : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            autoPlay: 3000,
            singleItem : true
        });

        $("#owl-MuPic1").owlCarousel({
            autoPlay: 3000,
            items : 2,
            navigation : true,
            navigationText: [
            "<i class='icon-left-open'></i>",
            "<i class='icon-right-open'></i>"
            ],
            pagination:true,
            itemsTablet: [1170,2],
            itemsDesktop : [979,3]       
        });
        $("#owl-MuPic2").owlCarousel({
            autoPlay: 3000,
            items : 2,
            navigation : true,
            navigationText: [
            "上一个",
            "下一个"
            ],
            pagination:false,
            itemsTablet: [1199,2]   
        });

        $("#owl-Text").owlCarousel({
            autoPlay: 3000,
            pagination : false,
            items : 1,
        	itemsTablet: [1170,1],
            itemsDesktop : [979,1],
            itemsTablet : [767,1]
        });
	};
	

	return {
		//main function to initiate template pages
		init : function() {
			runSlider();
		}
	};
}();
