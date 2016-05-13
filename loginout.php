<?php

    /**
    * 退出登录处理
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

    unset($_SESSION['pic']);
    unset($_SESSION['detail']);
    unset($_SESSION['job']);
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    unset($_SESSION['login']);
    session_destroy();

    echo "<meta http-equiv=refresh content='0; url=templates/search.html'>";
?>