<?php

namespace app\common\validate;

use think\Validate;

class User extends Validate
{
  protected $rule = [
    'username' =>'require|max:15',
    'password' =>'require|max:256',
  ];
    
  protected $message = [
    'username.require' => '用户名必须',
    'username.max'     => '用户名过长',
    'password.require' => '密码必须',
    'password.max'     => '密码过长',
  ];
}
