@extends('home.base')
<link rel="stylesheet" href="/static/home/blog/css/style.css">
<link rel="stylesheet" href="/static/home/blog/css/pc.css">
@section('title',$info->title)
@section('main-header')
    <header class="top-header" id="header">
        <div class="flex-row">
            <a href="javascript:;" class="header-icon waves-effect waves-circle waves-light on"
               id="menu-toggle">
                <i class="icon icon-lg icon-navicon">
                </i>
            </a>
            <div class="flex-col header-title ellipsis">
                彼岸繁华的博客
            </div>
            <div class="search-wrap" id="search-wrap">
                <a href="javascript:;" class="header-icon waves-effect waves-circle waves-light"
                   id="back">
                    <i class="icon icon-lg icon-chevron-left">
                    </i>
                </a>
                <form action="#" onsubmit="$('#search').trigger('click');return false;">
                    <input id="key" class="search-input" name="keyword" autocomplete="off"
                           placeholder="输入感兴趣的关键字">
                    <a href="javascript:;" onclick="if($('.search-wrap').is('.in')){location.href='#';}"
                       class="header-icon waves-effect waves-circle waves-light" id="search" name="keywords">
                        <i class="icon icon-lg icon-search">
                        </i>
                    </a>
                </form>
            </div>
            <a href="javascript:;" class="header-icon waves-effect waves-circle waves-light"
               id="menuShare">
                <i class="icon icon-lg icon-share-alt">
                </i>
            </a>
        </div>
    </header>
    <header class="content-header index-header">
        <div class="container fade-scale">
            <h1 class="title">
                彼岸繁华的博客
            </h1>
            <h5 class="subtitle">
                攻城狮
            </h5>
        </div>
    </header>
@endsection
@section('content')
    <div class="container body-wrap">
        <article id="post-data-sync-in-vue-single-page-application" class="post-article article-type-post fade"
                 itemprop="blogPost">
            <div class="post-card">
                <h1 class="post-card-title">
                    {{$info->title}}
                </h1>
                <div class="post-meta">
                    <time class="post-time" title="2017年07月24日" datetime="2017年07月24日" itemprop="datePublished">
                        {{$info->created_at}}
                    </time>
                    <time class="post-time" title="17" itemprop="hits">
                        浏览量:{{$info->click}}
                    </time>
                </div>
                <div class="post-content" id="post-content" itemprop="postContent">
                   {{!! $info->content !!}}
                </div>
                <blockquote class="post-copyright">
                    <div class="content">
                                <span class="post-time">
                                    最后更新时间：
                                    <time datetime="2017年07月24日 10:33:41" itemprop="dateUpdated">
                                        {{$info->updated_at}}
                                    </time>
                                </span>
                        <br>
                    </div>
                </blockquote>
                <div class="post-footer">
                    <ul class="article-tag-list">
                       @forelse($info->tags as $tag)
                            <li class="article-tag-list-item">
                                <a class="article-tag-list-link">
                                   {{$tag->name}}
                                </a>
                            </li>
                           @empty
                            <li class="article-tag-list-item">
                                <a class="article-tag-list-link">
                                    标签可能跑路了..
                                </a>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
            <nav class="post-nav flex-row flex-justify-between">
                <div class="waves-block waves-effect prev">
                    <a href="javascript:;" id="post-prev" class="post-nav-link">
                        <div class="tips">
                            <i class="icon icon-angle-left icon-lg icon-pr">
                            </i>
                            Prev
                        </div>
                        <h4 class="title">
                            暂无更多内容！
                        </h4>
                    </a>
                </div>
                <div class="waves-block waves-effect next">
                    <a href="javascript:;" id="post-next" class="post-nav-link">
                        <div class="tips">
                            Next
                            <i class="icon icon-angle-right icon-lg icon-pl">
                            </i>
                        </div>
                        <h4 class="title">
                            暂无更多内容！
                        </h4>
                    </a>
                </div>
            </nav>
            <script src="js/acomment.js">
            </script>
            <div id="cloud-tie-wrapper" class="comments cloud-tie-wrapper">
                <div id="yun-tie-sdk-wrap">
                    <div class="tie-title-bar">
                                <span class="tie-title">
                                    评论
                                </span>
                    </div>
                    <div class="tie-input-bar">
                        <div class="input-box" ne-id="tieBox" ne-tmpl="formTpl">
                                    <textarea rows="8" cols="80" class="tie-textarea" id="js-pl-textarea" placeholder="吐槽、鼓励，想说啥就说啥！" name="content"></textarea>
                            <div class="tie-submit-row">
                                <div class="user-bar" ne-id="userBar" ne-tmpl="userBar">
                                    <input type="button" id="js-pl-submit" class="tie-submit-btn" value="发表评论"
                                           style="border:none;" />
                                    <div ne-id="tipBox" ne-tmpl="tipTpl" ne-data="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tie-tab-bar">
                            <ul>
                                <li class="z-fcs">
                                            <span>
                                                全部评价
                                            </span>
                                </li>
                            </ul>
                            <p class="promote-txt">
                            </p>
                        </div>
                        <script>
                          var csurl = "/index.php?c=Blog&a=comment_send";
                          var blog_id = "1";
                          var blog_aid = "1";
                        </script>
                        <div class="tie-panel-bar">
                            <div class="panel-new" style="display: block;">
                                <div class="tie-list" style="display: block;">
                                </div>
                            </div>
                        </div>
                        <div class="tie-i-mask">
                        </div>
                        <div class="tie-i-wrap">
                        </div> 
                    </div>
                </div>
                <div id="cloud-tie-wrapper" class="comments cloud-tie-wrapper">
                </div>
        </article>
    </div>
@endsection