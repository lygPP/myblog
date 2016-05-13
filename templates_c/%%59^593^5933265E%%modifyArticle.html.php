<?php /* Smarty version 2.6.18, created on 2016-05-13 06:38:42
         compiled from modifyArticle.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分享新博文</title>
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/write.css">
	<link rel="stylesheet" href="umeditor/themes/default/css/umeditor.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul>
				<li><a href="index.php">首页</a></li>
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
					<li><a href="#">修改资料</a></li>
					<li><a href="#">我的评论</a></li>
					<li><a href="#">更改头像</a></li>
					<li><a href="#">更改头像</a></li>
				</ul>
				<h3>博客管理</h3>
				<ul>
					<li><a href="article.php">博文分享</a></li>
					<li><a href="video.php">视频分享</a></li>
					<li><a href="albummanager.php">图片分享</a></li>
				</ul>
				
			</div>
		<div class="rights" id="art">
				<form action="modifyarticle.php?articleid=<?php echo $this->_tpl_vars['articleid']; ?>
" method="post">
					<p class="defp">博文标题</p>
					<input class="defi" type="text" placeholder="博文标题" required="required" name="articletitle" value="<?php echo $this->_tpl_vars['articletitle']; ?>
">
					<p class="defp">关键字 / 标签</p>
					<input class="defi" type="text" placeholder="关键字 / 标签（用逗号隔开）" required="required" name="articlesummary" value="<?php echo $this->_tpl_vars['articlesummary']; ?>
">
					<p class="defp">博文内容</p>
					<div class="show">
						<script type="text/plain" id="myEditor" style="width:100%;height:350px;">
							<textarea name="articletext"><?php echo $this->_tpl_vars['articletext']; ?>
</textarea>
						</script>
					</div>
					<div class="btn">
						<input type="submit" value="修改">
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