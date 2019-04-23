<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    private $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {
        $categoryId = $this->request->query('category_id', 0);
        
        $list = Article::select(['*'])
            ->with(['category:id,name','tags'])
            ->when($categoryId,function ($query) use ($categoryId){
                $query->where(['category_id'=>$categoryId]);
            })
           ->paginate();
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

}
