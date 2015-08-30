<?php

namespace Home\Controller;

//use Think\Controller;
use Home\Controller;

class IndexController extends FontEndController {

    var $pernum = 30;

    public function index() {

//        $a = M("modelsinfo");
//
//        $page = $_GET['page'] && $_GET['page'] > 0 ? $_GET['page'] : 1;
//
//        if (S("modelinfo" . $page)) {
//            $data = S("modelinfo" . $page);
//        } else {
//            $data = $a->cache("modelinfo{$page}", 60, 'file')->limit($this->pernum * ($page - 1), 10)->order(array("modelid desc", "jiguan"))->select();
//        }
////        var_dump($data);
//

        $cateory = A("Category");//实例化一个Category类  生成树结构
        $catTree = $cateory->getCatTree();
        
        //分配模板变量
        $this->assign("title", "婚啦啦");
        $this->assign("catTree", $catTree);
        $this->display();
        unset($cateory);
    }

//
//    public function zhangwen() {
//        $m = M("modelsinfo");
//        $data = $m->where(array("modelid" => $_GET['id']))->find();
//        $this->assign("model", $data);
//
//        $this->display();
//    }
}
