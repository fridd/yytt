//menu
document.write("<script type=\"text/javascript\" >BAIDU_CLB_SLOT_ID = \"586642\";</script>");
document.write("<script type=\"text/javascript\" src=\"http://cbjs.baidu.com/js/o.js\"></script>");
$(document).ready(function () {

    $('li.mainlevel').mousemove(function () {
        $(this).find('ul').slideDown(); //you can give it a speed
    });
    $('li.mainlevel').mouseleave(function () {
        $(this).find('ul').slideUp("fast");
    });

    var size = $(".spll_box .list_box").length;


    var sll_wid = size * 144;
    $(".spll_box").css("width", sll_wid + "px");
    function left() {
        var sp_left = $(".spll_box").css("left");
        var nob = parseInt(sp_left)
        s_left = nob - 432;
        c_si = size / 3
        zong_s = -432 * (c_si - 1);
        $(".spll_box").animate({ left: s_left + 'px' });
        if (nob <= zong_s) {
            $(".spll_box").stop().animate({ left: '0px' });
        }
    }
    function right() {
        var sp_left = $(".spll_box").css("left");
        var nob = parseInt(sp_left)

        s_left = nob + 432;
        c_si = size / 3
        zong_s = -432 * (c_si - 1);
        $(".spll_box").animate({ left: s_left + 'px' });
        if (nob >= 0) {
            $(".spll_box").stop().animate({ left: zong_s + 'px' });
        }
    }

    $(".zuo").click(function () {
        $(".spll_box").stop();
        left();
    });
    $(".you").click(function () {
        $(".spll_box").stop();
        right();
    })
    var timer = setInterval(left, 3000);
    $(".banner_box").hover(function () {
        clearInterval(timer);
    }, function () {
        timer = setInterval(left, 3000);
    })
    $(".te_shur").focus(function () {
        $(this).css("color", "#313131")
    })
    $(".te_shur").blur(function () {
        $(this).css("color", "#eee")
    })

    $(".hei_qiu a").click(function () {
        var size = $(this).index();
        $(this).addClass("bian").siblings("a").removeClass("bian");
        $(".hei_box").eq(size).addClass("xianshi").siblings(".hei_box").removeClass("xianshi");
    })

    var shu = 0;
    function jishi() {
        var sit = $(".xc_shop a").length;
        shu += 1;
        if (shu > sit) {
            shu = 0;
        }
        $(".xc_shop a").eq(shu).fadeIn("slow").siblings("a").hide();
    }
    var times = setInterval(jishi, 3000);
    $(".xiangce").hover(function () {
        clearInterval(times);
    }, function () {
        times = setInterval(jishi, 3000);
    })













    $(".xiao_zs a").click(function () {
        sql = $(this).index();
        $(".xc_shop a").eq(sql).fadeIn("slow").siblings("a").hide();
    })
    var sql = $(".sqll_box").css("height");
    var nobr = parseInt(sql)
    var to_si = 0;
    function botm() {

        $(".sqll_box").animate({ top: (-nobr + 291) + 'px' }, 3000, function () {
            $(".botm").css("background", "#e2e2e2");
        });




























        var top_h = $(".sqll_box").css("top");
        x_to = parseInt(top_h);


    }
    function top_x() {

        $(".sqll_box").animate({ top: '0px' }, 3000, function () {
            $(".botm").css("background", "url(images/xiajia.png) center no-repeat #e2e2e2");
        });
        var top_h = $(".sqll_box").css("top");
        x_to = parseInt(top_h);


    }
    $(".botm").hover(function () {
        botm();
    }, function () {
        $(".sqll_box").stop();
    })
    $(".tox").hover(function () {
        top_x();
    }, function () {
        $(".sqll_box").stop();
    })

});





//$(".w_l").click(function () {
//    var s_size = $(".d_nei a").length;
//    var w_zong_s = 191 * s_size;
//    alert(w_zong_s);
//    $(".d_nei").css("width", w_zong_s + "px");
//    lef_px = $(".d_nei").css("left");
//    le_s = parseInt(lef_px);
//    m_l = le_s -= 191;
//    ingd = (s_size - 4) * -191;

//    if (le_s <= ingd) {

//    } else {
//        $(".d_nei").animate({ left: m_l + 'px' });
//    }
//})
//$(".w_r").click(function () {
//    var s_size = $(".d_nei a").length;
//    var w_zong_s = 191 * s_size;
//    alert(w_zong_s);
//    $(".d_nei").css("width", w_zong_s + "px");
//    lef_px = $(".d_nei").css("left");
//    le_s = parseInt(lef_px);



//    if (le_s >= 0) {

//    } else {
//        m_l = le_s += 191;
//        $(".d_nei").animate({ left: m_l + 'px' });
//    }
//})

function ChangePreview(imgurl,id) {

    $("#activity_img").attr("src", imgurl);
    $("#img_id").attr("href", "" + id);
}