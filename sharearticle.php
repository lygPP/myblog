<?php

    /**
    * 显示图片
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    require "./libs/smarty.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";


    
    $smarty->display("newArtical.html");
?>