$(function(){
//  新闻
	var newTitle = $(".n-title"),
		cont = $(".n-content"),
		index = 0,
		aClick = $("a", newTitle),
		$lang = $(".lang"),
		langClick = $('span', $lang);
		// 初始让第一个显示
		cont.eq(0).show();
		aClick.click(function(){
			//  标题选中效果
			$(this).addClass("active").siblings().removeClass("active");
			// 新闻内容显示
			cont.eq(aClick.index(this)).show().siblings(".n-content").hide();
		});	

	// 语言选项
	var langboolean = true,
		index = 0,
		$lang = $(".lang"),
		langClick = $('span', $lang);
	function showHide(a){
			$lang.animate({
					marginRight: a
			},500);
		};

	langClick.click(function(){
			var a = "0", b = "-165px";
			if (langboolean) {
				showHide(a);
				langboolean = false;
			}else{
				showHide(b);
				langboolean = true;
			}
		});

	var langa = $('a',$lang);
	function langShow(mythis,i){
			mythis.children('img').eq(i).addClass('hide').removeClass('show').siblings().addClass('show').removeClass('hide');
		}
		langa.each(function(){
			langShow($(this), 1);
		});

		 langa.hover(function(){
			langShow($(this), 0);
		 },function(){
		 	langShow($(this), 1);
		 });

		 langa.click(function(){
		 	$(this).addClass('active').siblings().removeClass('active');
		 	
		 });	


		// 搜索框
	var fdiv = $(".form"),
		myForm = $('#myForm'),
		sub = $(".sub"),
		txt = $(".txt"),
		targ = true;
	sub.click(function(){
			if(txt.val().length != 0){
				// 表单提交
				myForm.submit(); // 如果存在关键字则提交表单
				return false;
			}
			// 动画效果操作
			if (targ) {
				txt.show();
				fdiv.animate({width: "225px"}, 500);
				targ = false;
			}else{
				fdiv.animate({width: "50px"}, 500);
				targ = true;
			}
		});
		// 失去焦点---判断
	txt.blur(function(){
			if(txt.val().length == 0){
				fdiv.animate({width: "50px"}, 500);
				targ = true;
			}
		});
		// 如果搜索框内存在文字，则展示搜索框
		if (txt.val().length>0) {
			txt.show();
			fdiv.animate({width: "225px"}, 500);
			targ = false;			
		}


		// 标题侧边栏动画
	var $title = $('.left-title');
	$title.children('li').hover(function(){
			$title.find('.active').addClass('out').removeClass('active');
			$(this).addClass('hover');
		},function(){
			$title.find('.out').addClass('active').removeClass('out');
			$(this).removeClass('hover out');
		});	
})