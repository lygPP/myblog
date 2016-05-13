<?php

    /**
    * 搜索处理
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    require "./conn/conn.php";
    require "./libs/smarty.class.php";
    require "Album.class.php";
    require "Article.class.php";
    require "Picture.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $result = mysql_query("select * from user where username='".$_REQUEST['username']."'");
    if($result = mysql_fetch_assoc($result)){
        //$result = mysql_fetch_assoc($result);
        $article = new Article();
        $picture = new Picture();
        $album = new Album();

        $articles = $article->newArticle($result['userid']);
        $pictures = $picture->newPicture($album->newAlbum($result['userid']));
    
        $smarty->assign("articles",$articles);
        $smarty->assign("pictures",$pictures);

        $smarty->assign("username",$result['username']);
        $smarty->assign("pic",$result['pic']);
        $smarty->assign("detail",$result['datail']);
        $smarty->assign("job",$result['job']);
        $smarty->assign("userid",$result['userid']);

        $smarty->display("searchuserindex.html");
    }
    else{
        echo "<meta http-equiv=refresh content='0; url=templates/adminsearch.html'>";
    }
?>