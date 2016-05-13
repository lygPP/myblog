<?php

    /**
    * 登录处理
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    require "./conn/conn.php";
    require "./libs/smarty.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $result = mysql_query("delete from user where userid=".$_REQUEST['userid']);
    unlink("userpic/".$_REQUEST['pic']);

    echo "<meta http-equiv=refresh content='0; url=adminindex.php'>";
    
?>