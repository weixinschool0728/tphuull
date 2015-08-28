<?php

namespace Home\Controller;

use Think\Controller;

class FontEndController extends Controller {

    function __construct() {
        parent::__construct();
        $ismobile=ismobile();
        if($ismobile){
            C("DEFAULT_THEME","Mobile");
            C("TMPL_CACHE_PREFIX","mb");
        }
        $this->assign("ismobile",$ismobile);
    }

}
