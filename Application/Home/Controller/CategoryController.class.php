<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryController
 * www.aixianxing.com
 * @author xiaxiaxia
 */

namespace Home\Controller;

use Home\Controller;

class CategoryController extends FontEndController {

//    function CategoryController(){
//        $this->category=M("category");
//    }
    public function index() {
        $catId = $_GET['cid'];
        $this->display();
    }

    //API
    public function getCatTree() {
        $where = array(
            'deleted' => 0,
        );
        $m = M("category");
//        field("cat_id","pid","cat_name")->
        $data = $m->where($where)->select();
        vendor("Tree");
        $treeobj=new \Tree($data,  array("cat_id","pid"));
        $arr=$treeobj->leaf(0);
        return $arr;
    }

}
