<?php
namespace app\admin\controller;
use app\admin\model\link as linkModel;
use app\admin\model\Article as ArticleModel;
use app\admin\controller\Common;
class cate extends Common
{

   

    public function lst()
    {
    
         if(request()->isPost()){
            $sorts=input('post.');
            foreach ($sorts as $k => $v) {
                $cate->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功！',url('lst'));
            return;
        }
        return view();
	}

   