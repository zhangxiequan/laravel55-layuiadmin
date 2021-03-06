<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class IndexController extends BaseController
{
    private $request;
    public function __construct(Request $request)
    {
        parent::__construct();
        $this->request = $request;
    }
    public function index()
    {
        $categoryId = $this->request->query('category_id', 0);
        $keyword = trim($this->request->query('kw',null)) ?? null;
        $list = Article::select(['*'])
            ->with(['category:id,name','tags'])
            ->when($keyword, function ($query) use ($keyword) {
                $query->where('title', 'like', '%' . $keyword . '%');
            })
            ->when($categoryId,function ($query) use ($categoryId){
                $query->where(['category_id'=>$categoryId]);
            })
            ->latest()
           ->paginate(10);
//        dd($list->toArray());
        return view('home.index.index',['list'=>$list]);
    }
    
    /**
     *  文章详情
     * @author: zhangxiequan
     * @date  : 2019/4/18 11:04
     * @param $id
     */
    public function show($id)
    {
        $minutes = 1;
        $info = Cache::remember('Article_'.$id,$minutes,function () use($id) {
            return Article::select(['*'])->with(['category:id,name','tags'])->findOrfail(['id'=>$id])->first();
        });
        return view('home.index.show',['info'=>$info]);
    }
    
    
    public function siteInfo()
    {
        return view('home.index.site_info',['siteSeting'=>$this->siteSeting]);
    }

}
