<?php
namespace app\index\controller;
<<<<<<< HEAD

class Article
{
    public function index()
    {
        return view('article');
    }
=======
use think\Request;
class Article extends Common
{
    public function index()
    {
    	$artid=input('artid');
    	db('article')->where(array('id'=>$artid))->setInc('click');
    	$articles=db('article')->find($artid);
    	$article= new \app\index\model\Article();
    	$hotRes=$article->getHotRes($articles['cateid']);
    	$this->assign(array(
    		'articles'=>$articles,
    		'hotRes'=>$hotRes,
            'artid'=>$artid,
    		));
        return view('article');
    }

>>>>>>> 81b452689bf3da775bb1fbfa9c93c9abeba16d20
}
