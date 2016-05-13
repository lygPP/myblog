<?php

    /**
    * 转到修改博文页面
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

    $smarty->assign("articleid",$_REQUEST['articleid']);
    $smarty->assign("articletitle",$_REQUEST['articletitle']);
    $smarty->assign("articlesummary",$_REQUEST['articlesummary']);
    $smarty->assign("articletext",$_REQUEST['articletext']);
    
    $smarty->display("modifyArticle.html");
?>