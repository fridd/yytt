@extends('fuenabc.layouts.index')
@section('content')
<div id="bd">
    <div id="ban-in" style="background-image:url({{ asset('fuenabc/images/14415953225349.jpg') }})">
        <div class="ban-bg"></div>
    </div>
    <div class="row4 fix">
        <div class="wp">
            <div class="tit-i">
                <h3>免费预约体验课</h3>
                <h5><span>Free</span> reservation</h5>
            </div>
            <div class="contact-l">
                <ul class="ul-contact">
                    <li class="li1">合肥市经开区芙蓉路650号</li>
                    <li class="li2"><a href="tel:0551-66667773">0551-66667773 (咨询)</li>
                </ul>
            </div>
            <div class="contact-r">
                <form action="http://hd.ahyzyx.com/plus/diy.php" class="contact-form" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="action" value="post" />
                    <input type="hidden" name="diyid" value="2" />
                    <input type="hidden" name="do" value="2" />
                    <div class="">
                        <input type="text" class="inp l" name="name" id="name" placeholder="宝宝姓名">
                        <input type="text" class="inp r" name="tel" id="tel" placeholder="家长电话">
                    </div>
                    <input type='hidden' name='time' id='time' style='width:250px' class='intxt' value='' />
                    <input type="hidden" name="dede_fields" value="name,text;nl,text;tel,text;time,text" />
                    <input type="hidden" name="dede_fieldshash" value="51915e24a1d14f29f7b100864ae5f412" />
                    <input type="submit" value="预约体验课程" class="sub" id="sub">
                </form>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="map-s"> <a href="javascript:void(0);" class="btn"><em></em>点击展开地图</a> </div>
        <div class="map-pop map-pop-big"> <a href="javascript:void(0);" class="btn-down"></a>
            <div class="map-bg1"></div>
            <div class="map-bg2"></div>
            <div id="map" class="map-c" style="width:100%;height:100%;">
                <script type="text/javascript">
                    var markerArr = [
                        { title: "观澜校区", point: "117.277195,31.746963", address: "观澜华庭商业楼3层", tel: "0551-6222 6629" },
                        { title: "芙蓉路校区", point: "117.226765,31.794885", address: "经开区芙蓉路650号 ", tel: "0551-6222 6689" },
                        { title: "国耀校区", point: "117.209382,31.784216", address: "国耀·花半里西街西门16栋", tel: "0551-6221 1018" },
                        { title: "习友路校区", point: "117.198819,31.820588", address: "圣联香御公馆商业3层", tel: "0551-6222 0332" },
                        { title: "庐江路校区", point: "117.286933,31.86251", address: "合作经济广场3层", tel: "0551-6222 6606" },
                        { title: "稻香路校区", point: "117.183015,31.865229", address: "蜀山区稻香路与山湖路交口东北角综合楼2层", tel: "0551-6222 0331" },
                        { title: "绿地校区", point: "117.238975,31.827588", address: "政务区绿地蓝海国际大厦B座3层", tel: "0551-6222 6646" },
                        { title: "信地校区", point: "117.326064,31.883771", address: "信地步行街2号楼3层", tel: "0551-6221 1855" },
                        { title: "黄岳校区", point: "117.232405,31.846194", address: "汇峰大厦712室", tel: "0551-6222 0992" },
                        { title: "桐城路校区", point: "117.282859,31.82717", address: "宝业桐城绿苑8B栋3层", tel: "0551-6669 5550" },
                        { title: "万振校区", point: "117.30948,31.827512", address: "万振城市广场3层", tel: "0551-6669 5551" },
                        { title: "梦园校区", point: "117.208764,31.853296", address: "幸福里程5号楼3层", tel: "0551-6222 0882" },
                        { title: "铜陵路校区", point: "117.326159,31.862783", address: "万和新城广场A4二层", tel: "0551-6669 1115" },
                        { title: "星光汇校区", point: "117.231516,31.812077", address: "政务区担保大厦2层", tel: "0551-6222 6609" },
                    ];
                    function map_init() {
                        var map = new BMap.Map("map"); // 创建Map实例
                        var point = new BMap.Point(117.238975,31.827588); //地图中心点，合肥市
                        map.centerAndZoom(point, 13); // 初始化地图,设置中心点坐标和地图级别。
                        map.enableScrollWheelZoom(true); //启用滚轮放大缩小
                        //地图、卫星、混合模式切换
                        map.addControl(new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP, BMAP_SATELLITE_MAP, BMAP_HYBRID_MAP]}));
                        //向地图中添加缩放控件
                        var ctrlNav = new window.BMap.NavigationControl({
                            anchor: BMAP_ANCHOR_TOP_LEFT,
                            type: BMAP_NAVIGATION_CONTROL_LARGE
                        });
                        map.addControl(ctrlNav);
                        //向地图中添加缩略图控件
                        var ctrlOve = new window.BMap.OverviewMapControl({
                            anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
                            isOpen: 1
                        });
                        map.addControl(ctrlOve);
                        //向地图中添加比例尺控件
                        var ctrlSca = new window.BMap.ScaleControl({
                            anchor: BMAP_ANCHOR_BOTTOM_LEFT
                        });
                        map.addControl(ctrlSca);

                        var point = new Array(); //存放标注点经纬信息的数组
                        var marker = new Array(); //存放标注点对象的数组
                        var info = new Array(); //存放提示信息窗口对象的数组
                        var searchInfoWindow =new Array();//存放检索信息窗口对象的数组
                        for (var i = 0; i < markerArr.length; i++) {
                            var p0 = markerArr[i].point.split(",")[0]; //
                            var p1 = markerArr[i].point.split(",")[1]; //按照原数组的point格式将地图点坐标的经纬度分别提出来
                            point[i] = new window.BMap.Point(p0, p1); //循环生成新的地图点
                            marker[i] = new window.BMap.Marker(point[i]); //按照地图点坐标生成标记
                            map.addOverlay(marker[i]);
                            marker[i].setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
                            //显示marker的title，marker多的话可以注释掉
                            var label = new window.BMap.Label(markerArr[i].title, { offset: new window.BMap.Size(20, -10) });
                            marker[i].setLabel(label);
                            // 创建信息窗口对象
                            info[i] = "<p style=’font-size:12px;lineheight:1.8em;’>" + "</br>地址：" + markerArr[i].address + "</br> 电话：" + markerArr[i].tel + "</br></p>";
                            //创建百度样式检索信息窗口对象
                            searchInfoWindow[i] = new BMapLib.SearchInfoWindow(map, info[i], {
                                title  : markerArr[i].title,      //标题
                                width  : 290,             //宽度
                                height : 70,              //高度
                                panel  : "panel",         //检索结果面板
                                enableAutoPan : true,     //自动平移
                                searchTypes   :[
                                    BMAPLIB_TAB_SEARCH,   //周边检索
                                    BMAPLIB_TAB_TO_HERE,  //到这里去
                                    BMAPLIB_TAB_FROM_HERE //从这里出发
                                ]
                            });
                            //添加点击事件
                            marker[i].addEventListener("click",
                                (function(k){
                                    // js 闭包
                                    return function(){
                                        //将被点击marker置为中心
                                        //map.centerAndZoom(point[k], 18);
                                        //在marker上打开检索信息窗口
                                        searchInfoWindow[k].open(marker[k]);
                                    }
                                })(i)
                            );
                        }
                    }
                    //异步调用百度js
                    function map_load() {
                        var load = document.createElement("script");
                        load.src = "http://api.map.baidu.com/api?v=2.0&ak=IDvNBsejl9oqMbPF316iKsXR&callback=map_init";
                        document.body.appendChild(load);
                    }
                    window.onload = map_load;
                </script>

            </div>
        </div>
    </div>
</div>
<!-- end #bd -->
<div class="c"></div>


@endsection