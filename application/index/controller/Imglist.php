<?php
namespace app\index\controller;
<<<<<<< HEAD

class Imglist
{
    public function index()
    {
=======
use app\index\model\Article;
class Imglist extends Common
{
    public function index()
    {
    	$article=new Article();
    	$artRes=$article->getAllArticles(input('cateid'));
    	$cate=new \app\index\model\Cate();
        $cateInfo=$cate->getCateInfo(input('cateid'));
    	$this->assign(array(
    		'artRes'=>$artRes,
    		'cateInfo'=>$cateInfo,
    		));
>>>>>>> 81b452689bf3da775bb1fbfa9c93c9abeba16d20
        return view('imglist');
    }
}
