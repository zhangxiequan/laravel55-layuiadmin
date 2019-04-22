@extends('home.base')
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
        <ul class="post-list">
            @forelse($list as $item)
            <li class="post-list-item fade">
                <article id="post-data-sync-in-vue-single-page-application" class="article-card article-type-post"
                         itemprop="blogPost">
                    <div class="post-meta">
                        <time class="post-time" title="2017-07-24" datetime="2017-07-24" itemprop="datePublished">
                            {{$item->created_at}}
                        </time>
                    </div>
                    <h3 class="post-title" itemprop="name">
                        <a class="post-title-link" href="{{route('home.show',['id'=>$item->id])}}">
                            {{$item->title}}
                        </a>
                    </h3>
                    <div class="post-content" id="post-content" itemprop="postContent">
                        <a href="{{route('home.show',['id'=>$item->id])}}" class="post-more waves-effect waves-button">
                            阅读全文…
                        </a>
                    </div>
                    <div class="post-footer">
                        <ul class="article-tag-list">
                            <li class="article-tag-list-item">
                                <a class="article-tag-list-link">
                                    标签可能跑路了..
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            </li>
                @empty
                <article class="article-card archive-article">
                    <h1 class="post-title" itemprop="name">
                        <a class="post-title-link">
                            对不起,本栏目暂无文章！
                        </a>
                    </h1>
                </article>
            @endforelse
        </ul>
        <nav id="page-nav">
                    <span class="disabled_page">
                        首页
                    </span>
            <span class="disabled_page">
                        上一页
                    </span>
            <a href="javascript:void(0)" class="active">
                1
            </a>
            <span class="disabled_page">
                        下一页
                    </span>
            <span class="disabled_page">
                        尾页
                    </span>
        </nav>
    </div>
@endsection