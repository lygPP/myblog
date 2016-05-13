<?php

    /**
    * 删除视频
    * Author: Lin
    * Date: 2014-01-22
    */
    session_start();
    include "Video.class.php";
    require "./libs/smarty.class.php";

    $smarty = new Smarty();
    $smarty->template_dir = "./templates/";
    $smarty->compile_dir = "./templates_c/";
    $smarty->left_delimiter = "<{";
    $smarty->right_delimiter = "}>";

    $video = new Video();

    $video->deleteVideo($_REQUEST['videoid']);






    echo "<meta http-equiv=refresh content='0; url=video.php'>"; 
    //跳到picture.php

?>