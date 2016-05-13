<?php

    /**
    * 删除图片
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    include "Picture.class.php";
    require "./libs/smarty.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $picture = new Picture();

    $picture->deletePicture($_REQUEST['radio']);






    echo "<meta http-equiv=refresh content='0; url=picture.php?albumid={$_REQUEST['albumid']}'>"; 
    //跳到picture.php

?>