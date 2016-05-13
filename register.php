<?php

    /**
    * 注册
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


    list($maintype,$subtype) = explode("/",$_FILES['myfile']['type']);
    if($maintype=="text"){
        echo "不能上传文本文件";
        exit;
    }
    $upfile = './userpic/'.$_FILES['myfile']['name'];
    move_uploaded_file($_FILES['myfile']['tmp_name'],$upfile);

    $result = mysql_query("insert into user(username,password,pic,datail,job) values('".$_REQUEST['username']."','".$_REQUEST['password']."','".$_FILES['myfile']['name']."','".$_REQUEST['detail']."','".$_REQUEST['job']."')");
    if($result){
        echo "<meta http-equiv=refresh content='0; url=templates/login.html'>"; 
        //$smarty->display("login.html");
    }
    else{
        echo "<meta http-equiv=refresh content='0; url=templates/register.html'>"; 
        //$smarty->display("register.html");
    }
?>