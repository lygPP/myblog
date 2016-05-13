<?php

    /**
    * 搜索处理
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

    $result = mysql_query("select * from user where username='".$_REQUEST['username']."'");
    if($result = mysql_fetch_assoc($result)){
        //$result = mysql_fetch_assoc($result);
        $smarty->assign("username",$result['username']);
        $smarty->assign("pic",$result['pic']);
        $smarty->assign("detail",$result['datail']);
        $smarty->assign("job",$result['job']);
        $smarty->assign("userid",$result['userid']);

        $_SESSION['pic'] = $result['pic'];
        $_SESSION['detail'] = $result['datail'];
        $_SESSION['job'] = $result['job'];
        $_SESSION['userid'] = $result['userid'];
        $_SESSION['username'] = $result['username'];
        echo "<meta http-equiv=refresh content='0; url=index.php'>"; 
    }
    else{
        echo "<meta http-equiv=refresh content='0; url=templates/search.html'>";
    }
?>