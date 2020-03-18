<aside id="menu">
    <div class="inner flex-row-vertical">
        <a href="javascript:;" class="header-icon waves-effect waves-circle waves-light"
           id="menu-off">
            <i class="icon icon-lg icon-close">
            </i>
        </a>
        <div class="brand-wrap" style="background-image:url({{URL::asset('/static/home/blog/images/brand.jpg')}})">
            <div class="brand">
                <a href="#" class="avatar waves-effect waves-circle waves-light">
                    <img style="border-radius: 50%;" src="{{URL::asset('/images/zxq.jpg')}}" >
                </a>
                <hgroup class="introduce">
                    <h5 class="nickname">
                        {{$sidebarSeting['nickname']}}
                    </h5>
                    <a href="javascript:;" title="全栈工程师" class="mail">
                        email:{{$sidebarSeting['email']}}
                    </a>
                </hgroup>
            </div>
        </div>
            <div class="scroll-wrap flex-col">
                <ul class="nav">
                    <li class="waves-block waves-effect  ">
                        <a href="{{route('home.index')}}">
                            <i class="icon icon-lg icon-home">
                            </i>
                            首页
                        </a>
                    </li>
                    @forelse($sidebarCategory as $navList)
                        <li class="waves-block waves-effect ">
                            <a href="{{route('home.index',['category_id'=>$navList->id])}}">
                                <i class="icon icon-lg  {{$navList->icon}}">
                                </i>
                                {{$navList->name}}
                            </a>
                        </li>
                    @empty
                        <li class="waves-block waves-effect ">
                            <a href="archives.html">
                                这家伙很懒，什么都没有
                            </a>
                        </li>
                    @endforelse
                </ul>
            </div>
    </div>
</aside>