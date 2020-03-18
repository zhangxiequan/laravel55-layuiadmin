<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" style="overflow: hidden; height: 100%;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title>{{$siteSeting['title']}}</title>
    <meta name="generator" content="ymypt CMS">
    <meta name="author" content="376195259@qq.com">
    <meta name="keywords" content="{{$siteSeting['keywords']}}">
    <meta name="description" content="{{$siteSeting['description']}}">
    <link rel="shortcut icon" id="favicon" href="./site/favicon.png">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/animation.css">
    <style type="text/css">
        #intro {
            padding: 0;
            margin: 0;
            height: 0 !important;
            width: 0;
            overflow: hidden !important;
        }

        #intro .logo {
            float: left;
            margin: 0 10px 10px 0;
        }
        h1,
        h2,
        h3,
        h4,
        p,
        li {
            font-family: microsoft yahei;
        }
        @media screen and (min-width:600px) {
            .slide1 {
                background-image: url({{asset('images/1563281036.jpg')}});
            }

            .slide2 {
                background-image: url({{asset('images/1441949934.jpg')}});
            }

            .slide3 {
                background-image: url({{asset('images/1441956136.jpg')}});
            }

            .slide4 {
                background-image: url({{asset('images/1441947138.jpg')}};
            }
        }
        @media screen and (max-width:600px) {
            .slide1 {
                background-image: url({{asset('images/1563282883.jpg')}};
            }

            .slide2 {
                background-image: url({{asset('images/1443618672.jpg')}};
            }

            .slide3 {
                background-image: url({{asset('images/1443618099.jpg')}};
            }

            .slide4 {
                background-image: url({{asset('images/1443619355.jpg')}};
            }
        }

        @media screen and (min-width:600px) {
            .page2 {
                background-image: url({{asset('images/1441949348.jpg')}};
            }

            .page3 {
                background-image: url({{asset('images/1441956805.jpg')}};
            }

            .page4 {
                background-image: url({{asset('images/1443609696.jpg')}};
            }

            .page5 {
                background-image: url({{asset('images/1443614947.jpg')}};
            }

            .page6 {
                background-image: url({{asset('images/1443608806.jpg')}};
            }

            .page7 {
                background-image: url({{asset('images/1443610575.jpg')}};
            }

            .page8 {
                background-image: url({{asset('images/1443608078.jpg')}};
            }
        }

        @media screen and (max-width:600px) {
            .page2 {
                background-image: url({{asset('images/1443621700.jpg')}};
            }

            .page3 {
                background-image: url({{asset('images/1443621784.jpg')}};
            }

            .page4 {
                background-image: url({{asset('images/1443620091.jpg')}};
            }

            .page5 {
                background-image: url({{asset('images/1443623011.jpg')}};
            }

            .page6 {
                background-image: url({{asset('images/1443620778.jpg')}};
            }

            .page7 {
                background-image: url({{asset('images/1443619787.jpg')}};
            }

            .page8 {
                background-image: url({{asset('images/1443617380.jpg')}};
            }
        }

        @media screen and (min-width:1050px) {
            #index_x {
                display: none
            }
        }
    </style>
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $("#index_x").click(function () {
          $("#menu").hide();
        });
        $("#index_xs").click(function () {
          $("#menu").show();
        });
      });
    </script>
</head>

<body style="overflow: hidden; height: 100%;" class="fp-viewing-page8">
<header id="header" class="down">
    <div class="container clearfix">
        <h1 id="logo"> <a href="/"><img alt="logo图片" src="{{asset('/images/1563192086//.png')}}"></a></h1>
        <nav>
            <a class="icon_menu" id="index_xs"><img src="{{asset('/images/caidan.png')}}"></a>
            <ul id="menu">
                <li data-menuanchor="page1" class=""><a data-name="home" href="/#page1" class="cur"><span>首页</span></a></li>
                <li data-menuanchor="page2" class=""><a href="/#page2"><span>服务</span></a></li>
                <li data-menuanchor="page3" class=""><a href="/#page3"><span>展示</span></a></li>
                <li data-menuanchor="page4" class=""><a href="/#page4"><span>客户</span></a></li>
                <li data-menuanchor="page5" class=""><a href="/#page5"><span>特色</span></a></li>
                <li data-menuanchor="page7" class=""><a href="/#page7"><span>关于</span></a></li>
                <li data-menuanchor="page8" class="active"><a href="/#page8"><span>联系</span></a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="page-container ronbongpage-wrapper"
     style="height: 100%; position: relative; touch-action: none; transform: translate3d(0px, -6559px, 0px); transition: all 700ms ease 0s;">
    <section class="section page1 fp-section fp-table" data-anchor="page1" style="height: 937px;">
        <div class="fp-tableCell" style="height:937px;">
            <div class="rbslider-container rbslider-container-horizontal">
                <div class="home-news">
                    <span>NEWS:</span>
                    <ul style="margin-top: 0px;">
                    </ul>
                    <a onclick="location=&#39;news.php&#39;" href="/news.php" class="more">more</a>
                </div>
                <div class="rbslider-wrapper"
                     style="transition-duration: 0ms; transform: translate3d(-5760px, 0px, 0px);">
                    <div class="rbslider-slide slide1" style="width: 1920px;">
                        <div class="slide-content slide-content-1">
                            <h2><a href="/">腾飞工作室<b>因为专注、所以专业</b></a></h2>
                            <p class="intro">
                                腾飞工作室,专业一条龙诚接制作设计各类网站、各类APP、各类软件、各类微信小程序、包括服务器维护、网站开发等。
                                <br>咨询请联系QQ：376195259</p>
                            <p class="img"><img alt="腾飞工作室" src="{{asset('/images/1441947403.png')}}"></p>
                        </div>
                    </div>
                    <div class="rbslider-slide slide2" style="width: 1920px;">
                        <div class="slide-content slide-content-2">
                            <h2>您的满意,就是我们最大的追求！</h2>
                            <h3><a href="/">因为专业、所以卓越</a></h3>
                            <p class="intro">腾飞工作室，专业一条龙诚接开发各类国内外流行语言PHP、ASP、NET、C#、JAVA、Kotlin等语言程序或系统。
                                <br>咨询请联系QQ：376195259</p>
                        </div>
                    </div>
                    <div class="rbslider-slide slide3 rbslider-slide-prev" style="width: 1920px;">
                        <div class="slide-content slide-content-3">
                            <div class="content-box">
                                <h2>专业开发制作设计网站<b><a href="/">因为卓越,所以信赖</a></b></h2>
                                <p class="intro">
                                    <br>腾飞工作室,专业一条龙诚接制作开发设计市面上流行的各类程序，DISCUZ、DEDECMS、ThinkPHP、Laravel、Yii2、帝国CMS等等程序。
                                    <br>咨询请联系QQ：376195259</p>
                            </div>
                        </div>
                        <div class="background-box"></div>
                    </div>
                    <div class="rbslider-slide slide4 rbslider-slide-active" style="width: 1920px;">
                        <div class="slide-content slide-content-4">
                            <h2>专业建站、APP制作、小程序开发、公众号开发。</h2>
                            <h3><a href="/">专业诚信</a></h3>
                            <p class="intro">
                                腾飞工作室,专业高效一条龙诚接制作或搭建各类网站、APP、公众号、小程序                                <br>咨询请联系QQ：376195259</p>
                        </div>
                    </div>
                </div>
                <a class="move-down"></a>
                <div class="rbslider-pagination rbslider-pagination-clickable"><span
                            class="rbslider-pagination-bullet"></span><span
                            class="rbslider-pagination-bullet"></span><span
                            class="rbslider-pagination-bullet"></span><span
                            class="rbslider-pagination-bullet rbslider-pagination-bullet-active"></span></div>
            </div>
        </div>
    </section>
    <section class="section page2 fp-section fp-table" data-anchor="page2" style="height: 937px;">
        <div class="fp-tableCell" style="height:937px;">
            <div class="section-content-container">
                <hgroup>
                    <h2>WHAT CAN WE DO ?</h2>
                    <h3>我们的服务项目</h3>
                </hgroup>
                <ul class="section-content service-list">
                    <li>
                        <div class="top brand">
                            <h3><a href="/">品牌官网设计</a></h3>
                            <p><a href="/">BRAND WEBSITE</a></p>
                        </div>
                        <div class="intro">
                            <p><a href="/">为企业集团提供优秀的网站<br>
                                    品牌形象，现实商业价值</a></p>
                        </div>
                    </li>
                    <style>
                        .brand {
                            background-image: url({{asset('/images/1441948312.png')}});
                        }
                    </style>

                    <li>
                        <div class="top weixin">
                            <h3><a href="/">微信开发支持</a></h3>
                            <p><a href="/">WECHAT APPLICATION</a></p>
                        </div>
                        <div class="intro">
                            <p><a href="/">为手机平板等移动终端设备<br>
                                    提供完善的品牌化界面设计</a></p>
                        </div>
                    </li>
                    <style>
                        .weixin {
                            background-image: url({{asset('/images/1441951855.png')}});
                        }
                    </style>
                    <li>
                        <div class="top shop">
                            <h3><a href="/">电商运营策划</a></h3>
                            <p><a href="/">E-COMMERCIAL</a></p>
                        </div>
                        <div class="intro">
                            <p><a href="/">以良好的用户体验为中心<br>
                                    软件界面设计与优化整合</a></p>
                        </div>
                    </li>
                    <style>
                        .shop {
                            background-image: url({{asset('/images/1441953225.png')}});
                        }
                    </style>
                    <li>
                        <div class="top app">
                            <h3><a href="/">APP移动互联</a></h3>
                            <p><a href="/">IOS - WM - ANDROID</a></p>
                        </div>
                        <div class="intro">
                            <p><a href="/">提供网站平台、移动端<br>
                                    软件游戏界面的ICON图标设计</a></p>
                        </div>
                    </li>
                    <style>
                        .app {
                            background-image: url({{asset('/images/1441950521.png')}});
                        }
                    </style>
                </ul>
            </div>
        </div>
    </section>
    <section class="section page3 fp-section fp-table" style="background-position: center bottom; height: 937px;"
             data-anchor="page3">
        <div class="fp-tableCell" style="height:937px;">
            <div class="section-content-container rbslider-item-list-container">
                <hgroup>
                    <h2>案例展示</h2>
                    <h3>部分案例展示</h3>
                </hgroup>
                <div class="section-content rbslider-item-list-wrapper case-list">
                    <ul class="rbslider-item-list clearfix">
                        <li><a href="/show.php?cid=24&amp;id=55">
                                <div class="img-box">
                                    <div class="img"><img src="{{asset('/images/1563256762.png')}}" alt=""></div>
                                    <div class="ck"></div>
                                    <div class="cover"></div>
                                </div>
                                <div class="intro">
                                    <div class="intro-content">

                                        <h3>微信H5疯狂猜大小</h3>
                                        <p></p>
                                    </div>
                                    <div class="cover"></div>
                                </div>
                            </a>
                        </li>
                        <li><a href="/show.php?cid=24&amp;id=67">
                                <div class="img-box">
                                    <div class="img"><img src="{{asset('/images/1563267594.png')}}" alt=""></div>
                                    <div class="ck"></div>
                                    <div class="cover"></div>
                                </div>
                                <div class="intro">
                                    <div class="intro-content">

                                        <h3>幸运H5游戏</h3>
                                        <p></p>
                                    </div>
                                    <div class="cover"></div>
                                </div>
                            </a>
                        </li>
                        <li><a href="/show.php?cid=24&amp;id=66">
                                <div class="img-box">
                                    <div class="img"><img src="{{asset('/images/1563271284.png')}}" alt=""></div>
                                    <div class="ck"></div>
                                    <div class="cover"></div>
                                </div>
                                <div class="intro">
                                    <div class="intro-content">

                                        <h3>微信H5游戏</h3>
                                        <p></p>
                                    </div>
                                    <div class="cover"></div>
                                </div>
                            </a>
                        </li>

                        <a onclick="location=&#39;case.php&#39;" class="wider-more"
                           href="/case.php">MORE</a>
                    </ul>
                    <div class="rbslider-pagination"></div>
                </div>
                <div class="navigation case">
                    <a class="prev"></a>
                    <a class="next"></a>
                </div>
                <div onclick="location=&#39;case.php&#39;" class="rbslider-item-list-more">MORE</div>
            </div>
        </div>
    </section>
    <section class="section page4 fp-section fp-table" style="background-position: center bottom; height: 937px;"
             data-anchor="page4">
        <div class="fp-tableCell" style="height:937px;">
            <div class="section-content-container">
                <hgroup>
                    <h2>OUR PARTNERS</h2>
                    <h3>合作伙伴</h3>
                </hgroup>
                <div class="section-content">
                    <ul class="partner-list clearfix">
                        <li>
                            <div class="con">
                                <div class="img"><img alt="大舟山" src="{{asset('/images/1563188480.jpg')}}" style="margin-top: 41px;"></div>
                                <h4><a href="/">大舟山</a></h4>
                                <p><a href="/">大舟山</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                        <li>
                            <div class="con">
                                <div class="img"><img alt="温房网" src="{{asset('/images/1563192559.jpg')}}"
                                                      style="margin-top: 41px;"></div>
                                <h4><a href="/">温房网</a></h4>
                                <p><a href="/">温房网</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                        <li>
                            <div class="con">
                                <div class="img"><img alt="安居客" src="{{asset('/images/1563191887.jpg')}}"
                                                      style="margin-top: 41px;"></div>
                                <h4><a href="/">安居客</a></h4>
                                <p><a href="/">安居客</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                        <li>
                            <div class="con">
                                <div class="img"><img alt="乐居" src="{{asset('/images/1563189270.jpg')}}"
                                                      style="margin-top: 41px;"></div>
                                <h4><a href="/">乐居</a></h4>
                                <p><a href="/">乐居</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                        <li>
                            <div class="con">
                                <div class="img"><img alt="奥数网" src="{{asset('/images/1563195007.jpg')}}"
                                                      style="margin-top: 41px;"></div>
                                <h4><a href="/">奥数网</a></h4>
                                <p><a href="/">奥数网</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                        <li>
                            <div class="con">
                                <div class="img"><img alt="舟山人才网" src="{{asset('/images/1563194656.jpg')}}"
                                                      style="margin-top: 41px;"></div>
                                <h4><a href="/">舟山人才网</a></h4>
                                <p><a href="/">舟山人才网</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                        <li>
                            <div class="con">
                                <div class="img"><img alt="宁波大学" src="{{asset('/images/1563195786.jpg')}}"
                                                      style="margin-top: 41px;"></div>
                                <h4><a href="/">宁波大学</a></h4>
                                <p><a href="/">宁波大学</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                        <li>
                            <div class="con">
                                <div class="img"><img alt="南京信息工程大学" src="{{asset('/images/1563195711.jpg')}}"
                                                      style="margin-top: 41px;"></div>
                                <h4><a href="/">南京信息工程大学</a></h4>
                                <p><a href="/">南京信息工程大学</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                        <li>
                            <div class="con">
                                <div class="img"><img alt="江苏论坛" src="{{asset('/images/1563189955.jpg')}}"
                                                      style="margin-top: 41px;"></div>
                                <h4><a href="/">江苏论坛</a></h4>
                                <p><a href="/">江苏论坛</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                        <li>
                            <div class="con">
                                <div class="img"><img alt="浙江论坛" src="{{asset('/images/1563194341.jpg')}}"
                                                      style="margin-top: 41px;"></div>
                                <h4><a href="/">浙江论坛</a></h4>
                                <p><a href="/">浙江论坛</a></p>
                            </div>
                            <div class="ck"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section page5 white fp-section fp-table" data-anchor="page5" style="height: 937px;">
        <div class="fp-tableCell" style="height:937px;">
            <div class="section-content-container rbslider-item-list-container">
                <hgroup>
                    <h2>RESPONSIVE DESIGN</h2>
                    <h3>不同设备，同样精彩</h3>
                </hgroup>
                <div class="section-content rbslider-item-list-wrapper equipment-list">
                    <ul class="rbslider-item-list clearfix">
                        <li>
                            <p><a href="/"><img alt="触及视觉灵魂的设计趋势" src="{{asset('/images/1441954332.png')}}"></a></p>
                            <p class="text">
                                <a href="/">触及视觉灵魂的设计趋势<br>精心布局的用户体验<br>毫无顾忌地通过任何终端</a>
                            </p>
                        </li>
                        <li>
                            <p><a href="/"><img alt="Html5 + CSS3 响应式布局"
                                                src="{{asset('/images/1441951089.png')}}"></a></p>
                            <p class="text">
                                <a href="/">Html5 + CSS3 响应式布局<br>卓越的浏览器兼容性<br>因为高端，所以出众</a>
                            </p>
                        </li>
                        <li>
                            <p><a href="/"><img alt="基于 B/S 架构的网站建设" src="{{asset('/images/1441947891.png')}}"></a>
                            </p>
                            <p class="text">
                                <a href="/">基于 B/S 架构的网站建设<br>无障碍的跨平台应用<br>无须用户下载安装即可使用</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="navigation equipment">
                    <a class="prev"></a>
                    <a class="next"></a>
                </div>

            </div>
        </div>
    </section>

    <section class="section page6 fp-section fp-table" data-anchor="page6" style="height: 937px;">
        <div class="fp-tableCell" style="height:937px;">
            <div class="section-content-container marketing-content">
                <hgroup>
                    <h2>MARKETING</h2>
                    <h3>整合营销，抢占商机</h3>
                </hgroup>
                <div class="section-content">
                    <ul class="marketing_list clearfix">
                        <li>
                            <div class="icon">
                                <div class="circular l"></div>
                                <div class="circular r"></div>
                                <span><img style="margin-top:30px" alt="搜索引擎"
                                           src="{{asset('/images/1443703213.png')}}"></span>
                            </div>
                            <h4><a href="/">搜索引擎</a></h4>
                            <p class="text">
                                <a href="/">SEO 优化<br>提高收录率</a></p>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="circular l"></div>
                                <div class="circular r"></div>
                                <span><img style="margin-top:30px" alt="微信营销"
                                           src="{{asset('/images/1443702541.png')}}"></span>
                            </div>
                            <h4><a href="/">微信营销</a></h4>
                            <p class="text">
                                <a href="/">公众账号 / 微网站<br>微商城</a></p>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="circular l"></div>
                                <div class="circular r"></div>
                                <span><img style="margin-top:30px" alt="微博营销"
                                           src="{{asset('/images/1443707613.png')}}"></span>
                            </div>
                            <h4><a href="/">微博营销</a></h4>
                            <p class="text">
                                <a href="/">企业蓝V认证<br>微博接入网站</a></p>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="circular l"></div>
                                <div class="circular r"></div>
                                <span><img style="margin-top:30px" alt="信息推送"
                                           src="{{asset('/images/1443700279.png')}}"></span>
                            </div>
                            <h4><a href="/">信息推送</a></h4>
                            <p class="text">
                                <a href="/">短信平台接口<br>Email 推送</a></p>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="circular l"></div>
                                <div class="circular r"></div>
                                <span><img style="margin-top:30px" alt="在线支付"
                                           src="{{asset('/images/1443704543.png')}}"></span>
                            </div>
                            <h4><a href="/">在线支付</a></h4>
                            <p class="text">
                                <a href="/">支付宝、银联<br>Paypal 接口</a></p>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="circular l"></div>
                                <div class="circular r"></div>
                                <span><img style="margin-top:30px" alt="论坛聚人"
                                           src="{{asset('/images/1443708028.png')}}"></span>
                            </div>
                            <h4><a href="/">论坛聚人</a></h4>
                            <p class="text">
                                <a href="/">独立开发<br>会员打通</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section page7 fp-section fp-table" data-anchor="page7" style="height: 937px;">
        <div class="fp-tableCell" style="height:937px;">
            <ul class="home-about">
                <li class="">
                    <h2>腾飞工作室</h2>
                    <div class="con">
                        <p>腾飞工作室</p>


                    </div>
                    <h3 class="bot">腾飞工作室</h3>
                </li>
                <li class="">
                    <h2>腾飞工作室</h2>
                    <div class="con">
                        <p>腾飞工作室</p>


                    </div>
                    <h3 class="bot">腾飞工作室</h3>
                </li>
                <li class="cur">
                    <h2>腾飞工作室</h2>
                    <div class="con">
                        <p>腾飞工作室</p>


                    </div>
                    <h3 class="bot">腾飞工作室</h3>
                </li>

            </ul>
            <ul class="home-about-navi">
                <li>愿景</li>
                <li>关于</li>
                <li>荣誉</li>
                <li class="bg" style="top: 64px; left: 0px;"></li>
            </ul>
            <div class="home-about-bottom">
                <ul class="clearfix">


                    <li><em>100%</em>用心服务每一个客户</li>
                    <li><em>98%</em>的设计一次通过验收</li>
                    <li><em>95%</em>以上的客户续费率</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section page8 fp-section fp-table active" data-anchor="page8" style="height: 937px;">
        <div class="fp-tableCell" style="height:937px;">
            <div class="home-contact">
                <ul class="clearfix">
                    <li class="img"><img src="./image/1563211514.jpg" align="微信"></li>

                    <li class="center">
                        <h2><a href="tel:QQ376195259" class="联系电话">QQ376195259</a></h2>
                        <p>
                            腾飞工作室<br>
                            联系QQ:376195259<br>
                            地址：陕西省<br>
                        </p>
                    </li>

                    <li class="line"></li>
                </ul>
                <div class="clear"></div>
                <div style="width:100%; float:left; text-align:center; margin-top:10px; font-size:15px;">友情链接： <a
                            style="font-family:microsoft yahei" target="_blank" href="/case.php">游戏展示</a>
                    |
                </div>
                <div class="kh">
                    <h2>© 2019 腾飞工作室版权所有</h2>
                    <p style="color: #666; font-size:14px"><a href="http://www.miitbeian.gov.cn/"
                                                              target="_blank"></a></p>
                </div>
            </div>
        </div>
    </section>

</div>
<div id="panel">
    <ul class="icons">
        <li class="up" title="上一页"></li>
        <li class="qq"></li>
        <li class="tel"></li>
        <li class="wx"></li>
        <li class="down" title="下一页"></li>
    </ul>
    <ul class="info">
        <li class="qq">
            <p>在线沟通，请点我<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=376195259&amp;site=qq&amp;menu=yes"
                          target="_blank">在线咨询</a></p>
        </li>
        <li class="tel">
            <p>咨询热线：<br>QQ376195259<br>客服qq：<br>376195259</p>
        </li>
        <li class="wx">
            <div class="img"><img src="./site/1563205207.jpg"></div>
        </li>
    </ul>
</div>
<div class="index_cy"></div>
<script type="text/javascript" src="/js/jquery-1.9.1.js"></script>
<script type="text/javascript">
  $("header nav .icon_menu").click(function () {
    $(this).siblings("ul").toggleClass("show");
  });
  $("#panel .icons li").not(".up,.down").mouseenter(function () {
    $("#panel .info").addClass('hover');
    $("#panel .info li").hide();
    $("#panel .info li." + $(this).attr('class')).show();
  });
  $("#panel").mouseleave(function () {
    $("#panel .info").removeClass('hover');
  })
  $(".icons .up").click(function () {
    $.fn.ronbongpage.moveSectionUp();
  });
  $(".icons .down").click(function () {
    $.fn.ronbongpage.moveSectionDown();
  });
  $(".index_cy").click(function () {
    $("#panel").toggle();
    $(".index_cy").addClass('index_cy2');
    $(".index_cy2").removeClass('index_cy');
  });
</script>
<script type="text/javascript" src="/js/home.js"></script>

<div id="fp-nav" class="right" style="color: rgb(0, 0, 0); margin-top: 0px;">
    <ul>
        <li><a href="/#page1" class=""><span></span></a></li>
        <li><a href="/#page2" class=""><span></span></a></li>
        <li><a href="/#page3" class=""><span></span></a></li>
        <li><a href="/#page4" class=""><span></span></a></li>
        <li><a href="/#page5" class=""><span></span></a></li>
        <li><a href="/#page6" class=""><span></span></a></li>
        <li><a href="/#page7" class=""><span></span></a></li>
        <li><a href="/#page8" class="active"><span></span></a></li>
    </ul>
</div>
</body>

</html>