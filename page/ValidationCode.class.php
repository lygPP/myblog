<?php
	class ValidationCode{
		private $width;
		private $height;
		private $codeNum;
		private $checkCode;
		private $image;

		function __construct($width=60,$height=20,$codeNum=4){
			$this->width=$width;
			$this->height=$height;
			$this->codeNum=$codeNum;
			$this->checkCode=$this->createCheckCode();
		}

		function showImage(){
			$this->getCreateImage();
			$this->outputText();
			$this->setDisturbColor();
			$this->outputImage();
		}

		function getCheckCode(){
			return $this->checkCode;
		}

		private function getCreateImage(){
			$this->image = imageCreate($this->width,$this->height);
			$back=imageColorAllocate($this->image,255,255,255);
			$border=imageColorAllocate($this->image,0,0,0);
			imageRectangle($this->image, 0, 0, $this->width-1, $this->height-1, $border);
		}

		private function createCheckCode(){
			for($i=0;$i<$this->codeNum;$i++){
				$number=rand(0,2);
				switch ($number) {
					case 0:
						$rand_number=rand(48,57);
						break;
					case 1:
						$rand_number=rand(65,90);
						break;
					case 2:
						$rand_number=rand(97,122);
						break;
				}
				$ascii=sprintf("%c",$rand_number);
				$ascii_number=$ascii_number.$ascii;
			}
			return $ascii_number;
		}

		private function outputText(){
			for($i=0;$i<$this->codeNum;$i++){
				$bg_color=imageColorAllocate($this->image,rand(0,255),rand(0,128),rand(0,255));
				$x=floor($this->width/$this->codeNum)*$i+3;
				$y=rand(0,$this->height-15);
				imagechar($this->image,5,$x,$y,$this->checkCode[$i],$bg_color);
			}
		}

		private function setDisturbColor(){
			for($i=0;$i<100;$i++){
				$color=imageColorAllocate($this->image,rand(0,255),rand(0,255),rand(0,255));
				imagesetpixel($this->image,rand(1,$this->width-2),rand(1,$this->height-2),$color);
			}
		}

		private function outputImage(){
			if(imagetypes()&IMG_GIF){
				ob_clean();
				header("Content-type:image/gif");
				imagegif($this->image);
			}
			else if(imagetypes()&IMG_JPEG){
				ob_clean();
				header("Content-type:image/jpeg");
				imagejpeg($this->image,"",0.5);
			}
			else if(imagetypes()&IMG_PNG){
				ob_clean();
				header("Content-type:image/png");
				imagepng($this->image);
			}
			else if(imagetypes()&IMG_WBMP){
				ob_clean();
				header("Content-type:image/vnd.wap.wbmp");
				imagewbmp($this->image);
			}
			else{
				die("不成功");
			}
		}

		function __destruct(){
			imagedestroy($this->image);
		}
	}
?>