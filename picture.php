<?php

    /**
    * 显示图片
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    include "Picture.class.php";
    require "./libs/smarty.class.php";
    include "page/Page.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $current_page = isset($_REQUEST['page'])?intval($_REQUEST['page']):1;

    $picture = new Picture();
    $total = $picture->getRowTotal($_REQUEST['albumid']);
    $fpage = new Page($total,$current_page,9); 
    $pageinfo = $fpage->getPageInfo();

    $pictures = $picture->browsePicture($_REQUEST['albumid'],$pageinfo['row_offset'],$pageinfo['row_num']);


    $smarty->assign("pictures",$pictures);
    $smarty->assign("pageinfo",$pageinfo);
    $smarty->assign("albumid",$_REQUEST['albumid']);













    if(isset($_SESSION['login']))
        $smarty->display("mPic.html");
    else
        $smarty->display("showPic.html");
?>