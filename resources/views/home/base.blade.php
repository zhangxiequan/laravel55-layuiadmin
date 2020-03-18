<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="theme-color" content="#3F51B5">
    <title>{{$siteSeting['title']}} | @yield('title','记录点滴')</title>
    <meta name="keywords" content="@yield('keywords', $siteSeting['keywords'])" />
    <meta name="description" content="@yield('description', '主营网站建设，移动app开发，微信公众号开发，小程序开发，域名申请、备案，阿里云服务器搭建、运维')" />
    <meta name="author" content="@yield('phone', $siteSeting['phone'])" />
    <link rel="stylesheet" href="/static/home/blog/css/style.css">
   {{-- <script>
      var _hmt = _hmt || [];
      (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b474e9420ab6f8d76aed0d61d0863087";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();
    </script>--}}
    <script src="/static/home/blog/js/jquery-2.0.3.min.js"></script>
    <script>
      window.lazyScripts = [];
    </script>
    <style type="text/css">
        .u {border-radius: 50%;}
    </style>
</head>

<body>
<div id="loading" class="active1">
</div>
@include('home.sidebar')
<main id="main">
    @yield('main-header')
    @yield('content')
    @include('home.footer')
</main>
<div class="mask" id="mask">
</div>
<a href="javascript:;" id="gotop" class="waves-effect waves-circle waves-light">
            <span class="icon icon-lg icon-chevron-up"></span>
</a>
<div class="mask jiathis_style_32x32" id="mask">
</div>
<a href="javascript:;" id="gotop" class="waves-effect waves-circle waves-light">
            <span class="icon icon-lg icon-chevron-up">
            </span>
</a>
<div class="global-share" id="globalShare">
    <ul class="reset share-icons">
        <li class="jiathis_button_tsina">
            <a class="weibo share-sns " target="_blank" href="javascript:;" onclick="window.open('http://service.weibo.com/share/share.php?url='+location.href);"
               data-title="微博">
                <i class="icon icon-weibo">
                </i>
            </a>
        </li>
        <li>
            <a class="qq share-sns" target="_blank" href="javascript:;" onclick="window.open('http://connect.qq.com/widget/shareqq/index.html?url='+location.href);"
               data-title=" QQ">
                <i class="icon icon-qq">
                </i>
            </a>
        </li>
        <li>
            <a class="facebook share-sns" target="_blank" href="javascript:;" onclick="window.open('https://www.facebook.com/sharer/sharer.php?url='+location.href);"
               data-title=" Facebook">
                <i class="icon icon-facebook">
                </i>
            </a>
        </li>
        <li>
            <a class="twitter share-sns" target="_blank" href="javascript:;" onclick="window.open('https://twitter.com/intent/tweet?text=js代码的博客='+location.href);"
               data-title=" Twitter">
                <i class="icon icon-twitter">
                </i>
            </a>
        </li>
        <li>
            <a class="google share-sns" target="_blank" href="javascript:;" onclick="window.open('https://plus.google.com/share?url='+location.href);"
               data-title=" Google+">
                <i class="icon icon-google-plus">
                </i>
            </a>
        </li>
    </ul>
</div>
<div class="page-modal wx-share" id="wxShare">
    <a class="close" href="javascript:;">
        <i class="icon icon-close">
        </i>
    </a>
</div>
<script src="/static/home/blog/js/waves.min.js">
</script>

<script>
  var BLOG = {
    ROOT: "/",
    SHARE: !0,
    REWARD: !1
  };
</script>
<script src="/static/home/blog/js/main.min.js">
</script>
<div class="search-panel" id="search-panel">
    <ul class="search-result" id="search-result">
    </ul>
</div>
<template id="search-tpl">
    <li class="item">
        <a href="{path}.html" class="waves-block waves-effect">
            <div class="title ellipsis" title="{title}">
                {title}
            </div>
            <div class="flex-row flex-middle">
                <div class="tags ellipsis">
                    {tags}
                </div>
                <time class="flex-col time">
                    {date}
                </time>
            </div>
        </a>
    </li>
</template>
<script>
  $(function() {
    var activea = $("#page-nav a.active");
    activea.after('<a class="page-number current waves-effect waves-button">' + activea.html() + '</a>').remove();
  });
</script>
﻿
<script>
  $(document).on("click", "#search",
    function() {
      if ($('.search-wrap').is('.in')) {
        if ($.trim($('#key').val()) == "") {
          $('.search-wrap').removeClass('in');
        } else {
          location.href = "#";
        }
      } else {
        $('.search-wrap').addClass('in');
      }

    });
</script>
</body>

</html>