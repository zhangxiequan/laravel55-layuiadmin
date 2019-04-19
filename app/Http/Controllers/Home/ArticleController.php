<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    private $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    /**
     *  文章列表
     * @author: zhangxiequan
     * @date  : 2019/4/18 11:04
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categoryId = $this->request->query('category_id', 1);
        $list = Article::select(['*'])->with('category')->where(['category_id'=>$categoryId])->paginate();
        
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
        $info = Article::select(['*'])->with('category:id,name')->findOrfail(['id'=>$id]);
    
        return view('home.index.show',['info'=>$info]);
    }


}
