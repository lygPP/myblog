<?php

    /**
    * 博文管理实现类
    * Author: Lin
    * Date: 2014-01-22
    */
    include "conn/conn.php";
    include "interface/ArticleInterface.php";

    class Article implements ArticleInterface{
    	public function addArticle($articletitle,$articlesummary,$articledate,$articletext,$userid){
            $result = mysql_query("insert into article(articletitle,articlesummary,articledate,articletext,userid) values('".$articletitle."','".$articlesummary."','".$articledate."','".$articletext."',".$userid.")");
        }

        public function updateArticle($articleid,$articletitle,$articlesummary,$articledate,$articletext,$userid){
            $result = mysql_query("update article set articletitle='".$articletitle."',articlesummary='".$articlesummary."',articledate='".$articledate."',articletext='".$articletext."',userid=".$userid." where articleid=".$articleid);
        }
        
        public function updateArticleSupportnum($articleid,$supportnum){
            $result = mysql_query("update article set supportnum=".$supportnum." where articleid=".$articleid);
        }
        
        public function updateArticleReadnum($articleid,$readnum){
            $result = mysql_query("update article set readnum=".$readnum." where articleid=".$articleid);
        }
        
    	public function deleteArticle($articleid){
            $result = mysql_query("delete from article where articleid = ".$articleid);
        }

        public function getRowTotal($userid){
            $result = mysql_query("select * from article where userid = ".$userid);
            return mysql_num_rows($result);
        }

        public function newArticle($uid){
            $result = mysql_query("select * from article where userid=$uid LIMIT 0,6");
            /*if($result){
                while ($row = mysql_fetch_assoc($result)) {
                    $articles[] = $row;
                }
                return $articles;
            }*/
            if($row = mysql_fetch_assoc($result)){
                while ($row) {
                    $articles[] = $row;
                    $row = mysql_fetch_assoc($result);
                }
                return $articles;
            }
            else return null;
        }

        public function showArticle($articleid){
            $result = mysql_query("select * from article where articleid=$articleid");
            if($row = mysql_fetch_assoc($result)){
                return $row;
            }
            else return null;
        }

        public function preArticle($articleid){
            $result = mysql_query("select * from article where articleid<$articleid");
            if($row = mysql_fetch_assoc($result)){
                while($row){
                    $articleid = $row['articleid'];
                    $row = mysql_fetch_assoc($result);
                }
                return $articleid;
            }
            else return $articleid;
        }

        public function nextArticle($articleid){
            $result = mysql_query("select * from article where articleid>$articleid");
            if($row = mysql_fetch_assoc($result)){
                return $row['articleid'];
            }
            else return $articleid;
        }

    	public function browseArticle($uid,$offset,$num){
            $result = mysql_query("select * from article where userid=$uid LIMIT $offset,$num");
            if($row = mysql_fetch_assoc($result)){
                while ($row) {
                    $articles[] = $row;
                    $row = mysql_fetch_assoc($result);
                }
                return $articles;
            }
            else return null;
        }

    }
?>