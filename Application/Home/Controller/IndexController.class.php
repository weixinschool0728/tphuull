<?php

namespace Home\Controller;

//use Think\Controller;
use Home\Controller;

class IndexController extends FontEndController {

    var $pernum = 30;

    public function index() {

        $cateory = A("Category"); //实例化一个Category类  生成树结构
        $catTree = $cateory->getCatTree();

        //分配模板变量
        $this->assign("title", "婚啦啦");
        $this->assign("catTree", $catTree);
        $this->display();
        unset($cateory);
    }

// test paybuy
    public function paybuy() {
        echo vendor("PayBuy.AliPay");
//        vendor($class, $baseUrl, $ext)
//        $alipay = new AliPay($data);
        //组装 $data
        $data = array(
            "price" => 22,
                //.......
        );
        $alipay = new \AliPay($data);
        var_dump($alipay);
//        $this->display();
    }

}
