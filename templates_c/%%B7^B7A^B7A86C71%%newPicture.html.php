<?php /* Smarty version 2.6.18, created on 2016-05-13 07:07:14
         compiled from newPicture.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的后台页面</title>
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/allfore.css">
</head>
<body>
	<div class="container">
		<div class="info">
			<nav>
				<ul>
					<li><a href="index.php">首页</a></li>
					<li><a href="article.php">博文管理</a></li>
					<li><a href="albummanager.php">图册管理</a></li>
					<li><a href="video.php">视频管理</a></li>
					<li><a href="loginout.php">注销</a></li>
				</ul>
			</nav>
			<div class="bg-color">
				<div class="info-list">
					<div>
					<img class="toux" src="userpic/<?php echo $_SESSION['pic']; ?>
" alt="我的头像">
					<section>
						<p>My name is <span> <?php echo $_SESSION['username']; ?>
 </span></p>
						<p>My Job : <span> <?php echo $_SESSION['job']; ?>
 </span></p>
						<p><span>Description : </span><?php echo $_SESSION['detail']; ?>
</p>
					</section>
					</div>
				</div>
			</div>
		</div>

		<div class="right-sight">
			<form id="uploadForm" action="addpicture.php?albumid=<?php echo $this->_tpl_vars['albumid']; ?>
" method="post" enctype="multipart/form-data" name="fileForm">
					<div class="upload_Box">
						<div class="upload_Main">
							<div class="upload_choose">
								<input type="file" id="fileImage" name="myfile[]" multiple>
								<span id="fileDragArea" class="upload_drag_area">可以直接选择文件或者上传将图片拖到此处</span>
							</div>
							<div id="preview" class="upload_preview">
								<img src="image/bg1.jpg" alt="新图片">
								<img src="image/bg3.png" alt="新图片">
								<img src="image/toux.jpg" alt="新图片">
								<img src="image/toux.jpg" alt="新图片">
								<img src="image/toux.jpg" alt="新图片">
								<img src="image/toux.jpg" alt="新图片"> 
							</div>
							<div class="defbtn">
								<input type="submit" name="Submit" value="确认上传" id="fileSubmit" class="upload_submit_btn">
							</div>
							<div id="uploadInf" class="upload_info">显示上传结果信息</div>
						</div>
					</div>
				</form>
		</div>
</body>
</html>