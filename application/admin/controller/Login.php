<?php

namespace app\admin\controller;


use think\Controller;
use think\Request;

use think\facade\Session;

class login extends Controller{
    public function index(){
        if(Session::get('user'=='admin')){
            $this->success('已经登录','index/index/index');
        }
        return $this->fetch();
    }
    public function check(){
        if(request()->isPost()){
            $data =[
            'username' => request()->param('username'),
            'password' => request()->param('password'),
            ];
            $validate = new \app\common\validate\User;
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }

            try {
                $user = model('AdminUser')->get(['username'=>$data['username'],'password' => hash("sha256",$data['password'])]);
            }catch (\Exception $e){
                $this->error($e->getMessage());
            }
            if(!$user){
            $this->error('账号或密码错误');
            }
        
            Session::set('user','admin');
            $this->success('登陆成功','index/index/index');
        }
    }
}
