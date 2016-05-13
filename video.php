<?php

    /**
    * 显示视频目录
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    include "Video.class.php";
    require "./libs/smarty.class.php";
    include "page/Page.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $current_page = isset($_REQUEST['page'])?intval($_REQUEST['page']):1;

    $video = new Video();
    $total = $video->getRowTotal($_SESSION['userid']);
    $fpage = new Page($total,$current_page,10); 
    $pageinfo = $fpage->getPageInfo();

    $videos = $video->browseVideo($_SESSION['userid'],$pageinfo['row_offset'],$pageinfo['row_num']);


    $smarty->assign("videos",$videos);
    $smarty->assign("pageinfo",$pageinfo);













    if(isset($_SESSION['login']))
        $smarty->display("mVideoList.html");
    else
        $smarty->display("showVideoList.html");
?>