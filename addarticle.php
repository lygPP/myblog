<?php

    /**
    * 添加博文
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

    $article->addArticle($_REQUEST['articletitle'],$_REQUEST['articlesummary'],date("Y-m-d"),$_REQUEST['articletext'],$_SESSION['userid']);






    echo "<meta http-equiv=refresh content='0; url=article.php'>"; 
    //跳到picture.php

?>