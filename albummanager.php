<?php

    /**
    * tupianguanli
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
    $albums = $album->browseAlbum($_SESSION['userid']);
    
    $smarty->assign("albums",$albums);
    if(isset($_SESSION['login']))
        $smarty->display("mAlbum.html");
    else
        $smarty->display("showAlbum.html");
?>