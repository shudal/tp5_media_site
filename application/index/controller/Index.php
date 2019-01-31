<?php
namespace app\index\controller;

use app\common\controller\Base;
class Index extends Base{
    //首页
    public function index(){
        return $this->fetch();
    }

    //获取视频分类
    public function pv(){
        $list = scandir('static/pv');
        unset($list[0]);unset($list[1]);$list=array_slice($list,0);
        return view('pv',['list'=>$list]);
    }

    //获取特定分类下的所有视频
    public function pa($class,$start=0){
      $list = scandir("static/pv/$class");
      unset($list[0]);unset($list[1]);$list=array_slice($list,0); 
      
      $size = count($list);
      $list = array_slice($list,$start,5);
      return view('pa',['list'=>$list,'size'=>$size,'class'=>$class,'now_i'=>$start]);
    }

    //获取图片分类
    public function pc(){
      $list = scandir('static/pc');
      unset($list[0]);unset($list[1]);$list=array_slice($list,0);
      return view('pc',['list'=>$list]);
    }

    //获取特定图片分类下的所有图片
    public function pi($class,$start=0){
      $list  = scandir("static/pc/$class");
      unset($list[0]);unset($list[1]);$list=array_slice($list,0);
      
      $size=count($list);
      $list=array_slice($list,$start,5);

      return view('pi',['list'=>$list,'size'=>$size,'class'=>$class,'now_i'=>$start]);
    }
}
