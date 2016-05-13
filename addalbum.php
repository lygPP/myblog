<?php

    /**
    * tianjiaxiangce
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    include "Album.class.php";
    require "./libs/smarty.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $album = new Album();
    $album->addAlbum($_REQUEST['albumname'],date("Y-m-d"),$_SESSION['userid']);
   
    /*$albums = $album->browseAlbum($_SESSION['userid']); 
    $smarty->assign("albums",$albums);
    $smarty->display("回到点击图片管理后的页面");*/

    echo "<meta http-equiv=refresh content='0; url=albummanager.php'>";
?>