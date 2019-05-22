<?php
namespace app\index\controller;
<<<<<<< HEAD

class Artlist
{
    public function index()
    {
=======
use app\index\model\Article;
class Artlist extends Common
{
    public function index()
    {
    	$article=new Article();
        $cateid=input('cateid');
    	$artRes=$article->getAllArticles($cateid);
    	$hotRes=$article->getHotRes($cateid);
        $cate=new \app\index\model\Cate();
        $cateInfo=$cate->getCateInfo($cateid);
    	$this->assign(array(
    		'artRes'=>$artRes,
    		'hotRes'=>$hotRes,
            'cateInfo'=>$cateInfo,
    		));
>>>>>>> 81b452689bf3da775bb1fbfa9c93c9abeba16d20
        return view('artlist');
    }
}
