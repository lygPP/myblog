<?php

    /**
    * 图片管理实现类
    * Author: Lin
    * Date: 2014-01-22
    */
    include "conn/conn.php";
    include "interface/PictureInterface.php";

    class Picture implements PictureInterface{
    	public function addPicture($picturename,$picturebath,$picturedate,$albumid){
            $result = mysql_query("insert into picture(picturename,picturedate,picturebath,albumid) values('".$picturename."','".$picturedate."','".$picturebath."',".$albumid.")");
        }
        
    	public function deletePicture($albumids){
            foreach ($albumids as $value) {
                $result = mysql_query("delete from picture where pictureid = ".$value);
            }
        }

        public function getRowTotal($albumid){
            $result = mysql_query("select * from picture where albumid = ".$albumid);
            if($result)
                return mysql_num_rows($result);
            else return 0;
        }

        public function newPicture($albumid){
            $result = mysql_query("select * from picture where albumid=$albumid LIMIT 0,4");
            /*if($result){
                while ($row = mysql_fetch_assoc($result)) {
                    $pictures[] = $row;
                }
                return $pictures;
            }*/
            if($result){
                if($row = mysql_fetch_assoc($result)){
                    while ($row) {
                        $pictures[] = $row;
                        $row = mysql_fetch_assoc($result);
                    }
                    return $pictures;
                }
            }
            else return null;
        }

    	public function browsePicture($albumid,$offset,$num){
            $result = mysql_query("select * from picture where albumid=$albumid LIMIT $offset,$num");
            /*if($result){
                while ($row = mysql_fetch_assoc($result)) {
                    $pictures[] = $row;
                }
                return $pictures;
            }*/
            if($result&&$row = mysql_fetch_assoc($result)){
                while ($row) {
                    $pictures[] = $row;
                    $row = mysql_fetch_assoc($result);
                }
                return $pictures;
            }
            else return null;
        }

    }
?>