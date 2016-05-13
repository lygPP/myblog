<?php /* Smarty version 2.6.18, created on 2016-05-11 18:42:30
         compiled from write.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发表博文</title>
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/write.css">
	<link rel="stylesheet" href="umeditor/themes/default/css/umeditor.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul>
				<li><a href="index.php">主页</a></li>
				<li><a href="article.php">博文</a></li>
				<li><a href="albummanager.php">图册</a></li>
				<li><a href="video.php">视频</a></li>
				<li><a href="loginout.php">注销</a></li>
			</ul>
		</nav>
		<div class="wbox">
			<div class="lefts">
				<img src="userpic/<?php echo $_SESSION['pic']; ?>
" alt="">
				<h3>个人信息管理</h3>
				<ul>
					<li><a href="tomodifyInfo.php">修改资料</a></li>
					<li><a href="">我的评论</a></li>
					<li><a href="tomodifyInfo.php">更改头像</a></li>
					<li><a href="tomodifyInfo.php">更改头像</a></li>
				</ul>
				<h3>博客管理</h3>
				<ul>
					<li><a href="article.php">博文分享</a></li>
					<li><a href="video.php">视频分享</a></li>
					<li><a href="albummanager.php">图片分享</a></li>
				</ul>
				
			</div>
		<!--<div class="rights" id="art">
				<form action="" method="post">
					<p class="defp">博文标题</p>
					<input class="defi" type="text" placeholder="博文标题" required="required" name="titles">
					<p class="defp">关键字 / 标签</p>
					<input class="defi" type="text" placeholder="关键字 / 标签（用逗号隔开）" required="required" name="sketch">
					<p class="defp">博文内容</p>
					<div class="show">
						<script type="text/plain" id="myEditor" style="width:100%;height:350px;">
							<p>博文开始</p>
						</script>
					</div>
					<div class="btn">
						<input type="submit" value="提交">
						<input type="reset" value="重置">
					</div>
				</form> 
			</div> -->
<!-- 			<div class="rights" id="video">
				<form action="" method="post">
					<p class="defp">视频链接</p>
					<input class="defi" type="text" placeholder="视频链接" required="required" name="titles">
					<p class="defp">描述</p>
					<textarea class="des" name="description" id="des"></textarea>
					<div class="btn">
						<input type="submit" value="提交">
						<input type="reset" value="重置">
					</div>
				</form>
			</div> -->

			<div class="rights" id="video">
				<form action="addvideo.php" method="post">
					<p class="defp">视频链接</p>
					<input class="defi" type="text" placeholder="视频链接" required="required" name="videolink">
					<p class="defp">描述</p>
					<textarea class="des" name="videodetail" id="des"></textarea>
					<div class="btn">
						<input type="submit" value="提交">
						<input type="reset" value="重置">
					</div>
				</form>
			</div>

		</div>
	</div>


	<script type="text/javascript" src="umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="umeditor/umeditor.config.js"></script>
    <script type="text/javascript" src="umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="umeditor/lang/zh-cn/zh-cn.js"></script>

	<script type="text/javascript">
	    //实例化编辑器
	    var um = UM.getEditor('myEditor');
	    // um.addListener('blur',function(){
	    //     $('#focush2').html('编辑器失去焦点了')
	    // });
	    // um.addListener('focus',function(){
	    //     $('#focush2').html('')
	    // });
    </script>

	
</body>
</html>