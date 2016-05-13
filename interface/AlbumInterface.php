<?php

    /**
    * 相册管理接口
    * Author: Lin
    * Date: 2014-01-22
    */
    
    interface AlbumInterface {
    	public function addAlbum($albumname,$albumdate,$userid);
    	public function deleteAlbum($albumid);
    	public function browseAlbum($uid);
    }
?>