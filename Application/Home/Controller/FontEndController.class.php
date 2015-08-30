<?php

namespace Home\Controller;

use Think\Controller;

class FontEndController extends Controller {

    function __construct() {
        parent::__construct();
        //权限判断 数组内必须首字母大写
        $nologin = array('Index', "Zhuce", "Search", "Category");
        if (!in_array(CONTROLLER_NAME, $nologin)) {
            if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
                $_SESSION['ref'] = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                header("location:" . U("Zhuce/login"));
            }
        }

        $ismobile = ismobile();
        if ($ismobile) {
            C("DEFAULT_THEME", "Mobile");
            C("TMPL_CACHE_PREFIX", "mb");
        }
        $this->assign("ismobile", $ismobile);
    }

}
