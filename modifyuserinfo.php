<?php

    /**
    * 修改用户信息
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    include "conn/conn.php";
    require "./libs/smarty.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    unlink("userpic/".$_SESSION['pic']);
    list($maintype,$subtype) = explode("/",$_FILES['myfile']['type']);
    if($maintype=="text"){
        echo "不能上传文本文件";
        exit;
    }
    $upfile = './userpic/'.$_FILES['myfile']['name'];
    move_uploaded_file($_FILES['myfile']['tmp_name'],$upfile);

    $result = mysql_query("update user set username='".$_REQUEST['username']."',password='".$_REQUEST['password']."',pic='".$_FILES['myfile']['name']."',datail='".$_REQUEST['detail']."',job='".$_REQUEST['job']."' where userid=".$_SESSION['userid']);
    $_SESSION['username']=$_REQUEST['username'];
    $_SESSION['password']=$_REQUEST['password'];
    $_SESSION['pic']=$_FILES['myfile']['name'];
    $_SESSION['detail']=$_REQUEST['detail'];
    $_SESSION['job']=$_REQUEST['job'];




    echo "<meta http-equiv=refresh content='0; url=index.php'>"; 
    //跳到picture.php

?>