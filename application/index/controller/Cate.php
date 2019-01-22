<?php
namespace app\index\controller;

use app\index\controller\Base;

class Cate extends Base
{
    public function index()
    {
    	$cateid=input('cateid');
    	//查询当前栏目名称  返回一个数组
    	$cateres=db('cate')->find($cateid);
    	// dump($cateres); die;
    	$this->assign('cateres',$cateres);
    	//查询当前栏目下的文章
    	$articles=db('article')->where(array('cateid'=>$cateid))->paginate(3);
    	$this->assign('articles',$articles); 
        return view();
    }
}
