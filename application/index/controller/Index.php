<?php
namespace app\index\controller;

use app\common\controller\Base;
class Index extends Base
{
    public function index(){
      $this->_initialize();
      return $this->fetch();
    }
    public function pv(){
      $list = scandir('/usr/share/nginx/html/tp5/public/static/pv');
      unset($list[0]);unset($list[1]);$list=array_slice($list,0);
      return view('pv',['list'=>$list]);
    }
    public function pa($class,$start=0){
      $list = scandir("/usr/share/nginx/html/tp5/public/static/pv/$class");
      unset($list[0]);unset($list[1]);$list=array_slice($list,0); 
      
      $size = count($list);
      $list = array_slice($list,$start,5);
      return view('pa',['list'=>$list,'size'=>$size,'class'=>$class,'now_i'=>$start]);
    }
    public function pc(){
      $list = scandir('/usr/share/nginx/html/tp5/public/static/pc');
      unset($list[0]);unset($list[1]);$list=array_slice($list,0);
      return view('pc',['list'=>$list]);
    }
    public function pi($class,$start=0){
      $list  = scandir("/usr/share/nginx/html/tp5/public/static/pc/$class");
      unset($list[0]);unset($list[1]);$list=array_slice($list,0);
      
      $size=count($list);
      $list=array_slice($list,$start,5);

      return view('pi',['list'=>$list,'size'=>$size,'class'=>$class,'now_i'=>$start]);
    }
}
