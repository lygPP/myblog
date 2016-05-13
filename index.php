<?php

    /**
    * 首页处理
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    require "./conn/conn.php";
    require "Album.class.php";
    require "Article.class.php";
    require "Picture.class.php";
    require "./libs/smarty.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $article = new Article();
    $picture = new Picture();
    $album = new Album();

    $articles = $article->newArticle($_SESSION['userid']);
    $pictures = $picture->newPicture($album->newAlbum($_SESSION['userid']));
    
    $smarty->assign("articles",$articles);
    $smarty->assign("pictures",$pictures);

    if($_SESSION['username']=="summer-yh"){
        if(isset($_SESSION['login']))
            $smarty->display("adminindex.html");
        else
            $smarty->display("index.html");
    }
    else 
        $smarty->display("index.html");
?>