<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Site;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     *  预设共享变量
     *  导航  侧边栏数据的
     *
     * @return void
     */
    public function boot()
    {
        //设置数据库字段长度191
        Schema::defaultStringLength(191);
        //后台admin左侧菜单
        view()->composer('admin.layout',function($view){
            $menus = \App\Models\Permission::with([
                'childs'=>function($query){$query->with('icon');}
                ,'icon'])->where('parent_id',0)->orderBy('sort','desc')->get();
            $unreadMessage = \App\Models\Message::where('read',1)->where('accept_uuid',auth()->user()->uuid)->count();
            $view->with('menus',$menus);
            $view->with('unreadMessage',$unreadMessage);
        });
        $site = Site::query()->pluck('value','key');
        view()->composer('home.sidebar', function ($view) use($site){
            $view->with('sidebarCategory',Category::all());
            $view->with('sidebarSeting',$site);
        });
        view()->composer('home.base', function ($view) use($site){
            $view->with('siteSeting',$site);
        });
        view()->composer('home.index.index', function ($view) use($site){
            $view->with('indexSeting',$site);
        });
    }

    /**
     * Register any application services.
     *
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
