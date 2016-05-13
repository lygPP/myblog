<?php

    /**
    * 博文管理接口
    * Author: Lin
    * Date: 2014-01-22
    */
    
    interface ArticleInterface {
    	public function addArticle($articletitle,$articlesummary,$articledate,$articletext,$userid);
        public function updateArticle($articleid,$articletitle,$articlesummary,$articledate,$articletext,$userid);
    	public function deleteArticle($articleid);
    	public function browseArticle($uid,$offset,$num);
    }
?>