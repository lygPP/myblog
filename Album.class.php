<?php

    /**
    * 相册管理实现类
    * Author: Lin
    * Date: 2014-01-22
    */
    include "conn/conn.php";
    include "interface/AlbumInterface.php";

    class Album implements AlbumInterface{
    	public function addAlbum($albumname,$albumdate,$userid){
            $result = mysql_query("insert into album(albumname,albumdate,userid) values('".$albumname."','".$albumdate."',".$userid.")");
        }
        
    	public function deleteAlbum($albumid){
            $result = mysql_query("delete from album where albumid = ".$albumid);
        }

        public function newAlbum($uid){
            $result = mysql_query("select * from album where userid = ".$uid);
            if($result){
                $row = mysql_fetch_assoc($result);
                return $row['albumid'];
            }
            else return -1;
        }

    	public function browseAlbum($uid){
            $result = mysql_query("select * from album where userid = ".$uid);
            if($row = mysql_fetch_assoc($result)){
                while ($row) {
                    $albums[] = $row;
                    $row = mysql_fetch_assoc($result);
                }
                return $albums;
            }
            else return null;
        }

    }
?>