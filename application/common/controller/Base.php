<?php

namespace app\common\controller;

use think\Controller;
use think\Request;

use think\facade\Session;

class Base extends Controller{
    public function initialize(){
        $isLogin = $this->isLogin();
        if (!$isLogin) {
          return $this->redirect('admin/login/index');
        }
    }
    public function isLogin(){
        if (Session::get("user")=='admin') {
            return true;
        }
        return false;
    }
}
