<?php

    /**
    * 删除博文
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    include "Article.class.php";
    require "./libs/smarty.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $article = new Article();

    $row=$article->showArticle($_REQUEST['articleid']);
    if(!isset($_SESSION['login'])){
        if(isset($_REQUEST['supportnum'])){
            $article->updateArticleSupportnum($_REQUEST['articleid'],$_REQUEST['supportnum']+1);
            $row['supportnum']=$row['supportnum']+1;
        }
        else{
            $article->updateArticleReadnum($_REQUEST['articleid'],$row['readnum']+1);
            $row['readnum']=$row['readnum']+1;
        }
    }
    $prev=$article->preArticle($_REQUEST['articleid']);
    $next=$article->nextArticle($_REQUEST['articleid']);

    $smarty->assign("row",$row);
    $smarty->assign("prev",$prev);
    $smarty->assign("next",$next);




    $smarty->display("showArtical.html");

?>