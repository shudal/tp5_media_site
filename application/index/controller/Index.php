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
      unset($list[0]);unset($list[1]);

      $size = count($list);
      $start = empty(request()->param('start')) ? 0 : request()->param('start');
      $list = array_slice($list,$start,5);
      return view('pv',['start'=>$start,'size'=>$size,'list'=>$list]);
    }
}
