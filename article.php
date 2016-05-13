<?php

    /**
    * 显示博文目录
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    include "Article.class.php";
    require "./libs/smarty.class.php";
    include "page/Page.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $current_page = isset($_REQUEST['page'])?intval($_REQUEST['page']):1;

    $article = new Article();
    $total = $article->getRowTotal($_SESSION['userid']);
    $fpage = new Page($total,$current_page,10); 
    $pageinfo = $fpage->getPageInfo();


    $articles = $article->browseArticle($_SESSION['userid'],$pageinfo['row_offset'],$pageinfo['row_num']);

    $smarty->assign("lengths",count($articles));
    $smarty->assign("articles",$articles);
    $smarty->assign("pageinfo",$pageinfo);














    if(isset($_SESSION['login']))
        $smarty->display("mAtcList.html");
    else 
        $smarty->display("showAtcList.html");
?>