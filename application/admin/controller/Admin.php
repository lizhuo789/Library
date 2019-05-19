<?php
namespace app\admin\controller;

class Admin
{
    public function lst()
    {
       return view();
    }

     public function add()
    {
      if(requst()->isPost()){
        $res=db('admin')->insert(input('post.'));
        dump(data);die;
        return;
      }

       return view();
      }
    }

    public function edit()
    {
       return view();
    }











}
