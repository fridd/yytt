var rDatePicker = function(){

	var runPickDate = function(){
		$('.datetimepicker').click(function() {
			$(this).datetimepicker({
				format: 'yyyy-mm-dd',
				startView: 2,
				minView: 2,
				autoclose: true,
				todayHighlight: true,
				language: 'zh-CN'
			});
		});
		
		 $(".form_datetime").datetimepicker({
			 	format: 'yyyy-mm-dd',
				startView: 2,
				minView: 2,
				autoclose: true,
				todayHighlight: true,
				language: 'zh-CN'
		 });

		$(".date-picker").datetimepicker({
			format: "yyyy MM dd",
	    	language:  'zh-CN',
	        todayHighlight:true,
	        todayBtn:true,
			startView: 2,
			minView: 2,
			maxView: 2,
			//language: 'zh-CN',
			//todayBtn: true
		});
	};

	return {
		init: function(){
			runPickDate();
		}
	};
}();