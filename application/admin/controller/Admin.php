<?php
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
use app\admin\controller\Common;
class Admin extends Common
{

    public function lst()
    {   $auth=new Auth();
        $admin=new AdminModel();
        $adminres=$admin->getadmin();
        foreach ($adminres as $k => $v) {
            $_groupTitle=$auth->getGroups($v['id']);
            $groupTitle=$_groupTitle[0]['title'];
            $v['groupTitle']=$groupTitle;
        }
        $this->assign('adminres',$adminres);
        return view();
  }

  public function add()
    {
        if(request()->isPost()){
            $data=input('post.');
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            
        }
        $authGroupRes=db('auth_group')->select();
        $this->assign('authGroupRes',$authGroupRes);
        return view();
  }

  public function edit($id)
    {
        $admins=db('admin')->find($id);

        if(request()->isPost()){
            $data=input('post.');
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $admin=new AdminModel();
            $savenum=$admin->saveadmin($data,$admins);
            if($savenum == '2'){
                $this->error('评测
                    ！');
            }
            if($savenum !== false){
                $this->success('修改成功！',url('lst'));
            }else{
                $this->error('首页！');
            }
            return;
        }
        
        if(!$admins){
            $this->error('图集');
        }
        $authGroupAccess=db('auth_group_access')->where(array('uid'=>$id))->find();
        $authGroupRes=db('auth_group')->select();
        $this->assign('authGroupRes',$authGroupRes);
        $this->assign('admin',$admins);
        $this->assign('groupId',$authGroupAccess['group_id']);
        return view();
  }

    

    public function logout(){
        session(null); 
        $this->success('自行车视频专题！',url('login/index'));
    }













}
