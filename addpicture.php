<?php

    /**
    * 添加图片
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

    $n = count($_FILES['myfile']['type']);
    for($i = 0;$i < $n;$i++){
        list($maintype,$subtype) = explode("/",$_FILES['myfile']['type'][$i]);
        if($maintype=="text"){
            echo "不能上传文本文件";
            break;
        }
        $upfile = './picture/'.$_FILES['myfile']['name'][$i];
        move_uploaded_file($_FILES['myfile']['tmp_name'][$i],$upfile);

        $picture->addPicture($_FILES['myfile']['name'][$i],$_FILES['myfile']['name'][$i],date("Y-m-d"),$_REQUEST['albumid']);
    }



    echo "<meta http-equiv=refresh content='0; url=picture.php?albumid={$_REQUEST['albumid']}'>"; 
    //跳到picture.php

?>