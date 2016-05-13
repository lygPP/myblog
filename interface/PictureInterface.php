<?php

    /**
    * 图片管理接口
    * Author: Lin
    * Date: 2014-01-22
    */
    
    interface PictureInterface {
    	public function addPicture($picturename,$picturebath,$picturedate,$albumid);
    	public function deletePicture($albumids);
    	public function browsePicture($albumid,$offset,$num);
    }
?>