<?php

    /**
    * 视频管理接口
    * Author: Lin
    * Date: 2014-01-22
    */
    
    interface VideoInterface {
    	public function shareVideo($videolink,$videodate,$videodetail,$userid);
    	public function deleteVideo($videoid);
    	public function browseVideo($userid,$offset,$num);
    }
?>