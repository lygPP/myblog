<?php

    /**
    * 分页类
    * Author: Lin
    * Date: 2014-01-22
    */

    class Page{
        private $total;
        private $page;
        private $num;
        private $pageNum;
        private $offset;

        function __construct($total,$page=1,$num=5){
            $this->total = $total;
            $this->page = $page;
            $this->num = $num;
            $this->pageNum = $this->getPageNum();
            $this->offset = $this->getOffset();
        }

        private function getPageNum(){
            return ceil($this->total/$this->num);
        }

        private function getNextPage(){
            if($this->page==$this->pageNum){
                return false;
            }
            else 
                return $this->page+1;
        }

        private function getPrevPage(){
            if($this->page==1){
                return false;
            }
            else 
                return $this->page-1;
        }

        private function getOffset(){
            return ($this->page-1)*$this->num;
        }

        private function getStartNum(){
            if($this->total==0){
                return 0;
            }
            else 
                return $this->offset+1;
        }

        private function getEndNum(){
            return min($this->offset+$this->num,$this->total);
        }

        public function getPageInfo(){
            $pageinfo = array("row_total"=>$this->total,"row_num"=>$this->num,"page_num"=>$this->getPageNum(),"current_page"=>$this->page,
                                "row_offset"=>$this->getOffset(),"next_page"=>$this->getNextPage(),"prev_page"=>$this->getPrevPage(),
                                "page_start"=>$this->getStartNum(),"page_end"=>$this->getEndNum());
            return $pageinfo;
        }

    }
?>