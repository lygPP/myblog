<?php

    /**
    * 视频管理实现类
    * Author: Lin
    * Date: 2014-01-22
    */
    include "conn/conn.php";
    include "interface/VideoInterface.php";

    class Video implements VideoInterface{
    	public function shareVideo($videolink,$videodate,$videodetail,$userid){
            $result = mysql_query("insert into video(videolink,videodate,videodetail,userid) values('".$videolink."','".$videodate."','".$videodetail."',".$userid.")");
        }
        
    	public function deleteVideo($videoid){
            $result = mysql_query("delete from video where videoid = ".$videoid);
        }

        public function getRowTotal($userid){
            $result = mysql_query("select * from video where userid = ".$userid);
            return mysql_num_rows($result);
        }

        /*public function newPicture($albumid){
            $result = mysql_query("select * from picture where albumid=$albumid LIMIT 0,4");
            if($result){
                while ($row = mysql_fetch_assoc($result)) {
                    $pictures[] = $row;
                }
                return $pictures;
            }
        }*/

    	public function browseVideo($userid,$offset,$num){
            $result = mysql_query("select * from video where userid=$userid LIMIT $offset,$num");
            /*if($result){
                while ($row = mysql_fetch_assoc($result)) {
                    $videos[] = $row;
                }
                return $videos;
            }*/
            if($row = mysql_fetch_assoc($result)){
                while ($row) {
                    $videos[] = $row;
                    $row = mysql_fetch_assoc($result);
                }
                return $videos;
            }
            else return null;
        }

    }
?>