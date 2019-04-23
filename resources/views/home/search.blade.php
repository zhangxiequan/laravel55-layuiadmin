<div class="search-wrap" id="search-wrap">
    <a href="javascript:;" class="header-icon waves-effect waves-circle waves-light"
       id="back">
        <i class="icon icon-lg icon-chevron-left">
        </i>
    </a>
    <form action="{{route('home.index')}}"  method="get" id="search-wrap-form" >
        <input id="key" class="search-input" name="kw" autocomplete="off" value="{{\Illuminate\Support\Facades\Request::get('kw',null)}}"
               placeholder="输入感兴趣的关键字">
        <a href="javascript:;" onclick="if($('.search-wrap').is('.in')){
         $('#search-wrap-form').submit();
        }"
           class="header-icon waves-effect waves-circle waves-light" id="search" name="keywords">
            <i class="icon icon-lg icon-search">
            </i>
        </a>
    </form>
</div>