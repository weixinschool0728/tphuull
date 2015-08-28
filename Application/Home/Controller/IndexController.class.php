<?php

namespace Home\Controller;

//use Think\Controller;
use Home\Controller;

class IndexController extends FontEndController {

    var $pernum = 30;

    public function index() {

        $a = M("modelsinfo");

        $page = $_GET['page'] && $_GET['page'] > 0 ? $_GET['page'] : 1;

        if (S("modelinfo" . $page)) {
            $data = S("modelinfo" . $page);
        } else {
            $data = $a->cache("modelinfo{$page}", 60, 'file')->limit($this->pernum * ($page - 1), 10)->order(array("modelid desc", "jiguan"))->select();
        }
//        var_dump($data);


        $this->assign("models", $data);

        $this->display();
        unset($a);
    }

    public function zhangwen() {
        $m = M("modelsinfo");
        $data = $m->where(array("modelid" => $_GET['id']))->find();
//        myxiaTest();
        $this->assign("model", $data);
//        dump($data);
        $this->display();
    }

}
