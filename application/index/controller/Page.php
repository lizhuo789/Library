<?php
namespace app\index\controller;

<<<<<<< HEAD
class Page
{
    public function index()
    {
=======
class Page extends Common
{
    public function index()
    {
    	$cates=db('cate')->find(input('cateid'));
    	$cate=new \app\index\model\Cate();
        $cateInfo=$cate->getCateInfo(input('cateid'));
    	$this->assign(array(
    		'cates'=>$cates,
    		'cateInfo'=>$cateInfo,
    		));
>>>>>>> 81b452689bf3da775bb1fbfa9c93c9abeba16d20
        return view('page');
    }
}
