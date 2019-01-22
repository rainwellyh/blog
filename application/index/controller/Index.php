<?php
namespace app\index\controller;


use app\index\controller\Base;

class Index extends Base
{
    public function index()
    {
    	//栏目推荐
    	$articles=db('article')->order('id desc')->paginate(4);
    	$this->assign('articles',$articles); 
       	 return view();
    }
}
