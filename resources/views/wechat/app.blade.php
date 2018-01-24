<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>香港藝朝藝夕</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="background: black">
        <div class="col-md-9">
            <!-- <nav class="navbar navbar-inverse"> -->
                <a class="navbar-brand" href="#">香港藝朝藝夕國際藝術教育研究院</a>
                <div class="col-md-6">
                  <ul class="nav navbar-nav">
                    <li><a href="#">關於我們</a></li>
                    <li><a href="#">學與教資源</a></li>
                    <li><a href="#">國際考試及認證</a></li>
                    <li><a href="#">產品與服務</a></li>
                  </ul>
                </div>
            <!-- </nav> -->
        </div>
        <div class="col-md-3">
            <form class="navbar-form navbar-left">
                
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
        </div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

        @yield('content')

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <dl>
                        <dt><a href="">關於我們</a></dt>
                        <dd><a href="">關於研究院</a></dd>
                        <dd><a href="">關於藝朝藝夕</a></dd>
                        <dd><a href="">事業發展</a></dd>
                        <dd><a href="">最新資訊</a></dd>
                        <dd><a href="">練習我們</a></dd>
                    </dl>
                </div>
                <div class="col-md-2">
                    <dl>
                        <dt><a href="">學與教資源</a></dt>
                        <dd><a href="">中國舞</a></dd>
                        <dd><a href="">國際標準舞</a></dd>
                        <dd><a href="">街舞</a></dd>
                        <dd><a href="">創意美術</a></dd>
                        <dd><a href="">鋼琴</a></dd>
                        <dd><a href="">電子鍵盤</a></dd>

                    </dl>
                </div>
                <div class="col-md-2">
                    <dl>
                        <dt><a href="">國際考試與證書</a></dt>
                        <dd><a href="">舞蹈</a></dd>
                        <dd><a href="">美術</a></dd>
                        <dd><a href="">音樂</a></dd>

                    </dl>
                </div>
                <div class="col-md-2">
                    <dl>
                        <dt><a href="">產品與服務</a></dt>
                        <dd><a href="">精選產品與服務</a></dd>
                        <dd><a href="">產品與服務搜尋</a></dd>
                        <dd><a href="">銷售點</a></dd>
                        <dd><a href="">特別推廣活動</a></dd>
                        <dd><a href="">網上商店</a></dd>

                    </dl>
                </div>
                <div class="col-md-2">
                    <dl>
                        <dt><a href="">聯絡我們</a></dt>
                        <dd><a href="">一般查詢</a></dd>
                        <dd><a href="">說明與技術支援</a></dd>
                        <dd><a href="">就業機會</a></dd>
                        <dd><a href="">侵權通知</a></dd>

                    </dl>
                </div>
                <div class="col-md-2">
                    <dl>
                        <dt><a href="">關注藝朝藝夕</a></dt>
                        <dd><a href="">Facebook</a></dd>
                        <dd><a href="">Youtobe</a></dd>
                        <dd><a href="">訂閱電子資訊</a></dd>
                    </dl>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-static-top" style="height: 100px;background: rgb(143, 196, 62);">
            <div class="container" style="margin-top: 10px;margin-bottom: 0">
                <div class="col-md-2">
                    <dl>
                        <dd><a href="">法律聲明</a></dd>    
                    </dl>
                </div>
                <div class="col-md-2">
                    <dl>
                        <dd><a href="">網上隱私政策聲明</a></dd>    
                    </dl>
                </div>
                <div class="col-md-2">
                    <dl>
                        <dd><a href="">收集個人資料聲明</a></dd>    
                    </dl>
                </div>
            </div>
            <div class="container" style="font-size: 18px">
                ©2017 香港艺朝艺夕国际艺术教育研究院有限公司版权所有。
            </div>
        </nav>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
