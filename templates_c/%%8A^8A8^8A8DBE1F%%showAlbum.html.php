<?php /* Smarty version 2.6.18, created on 2016-05-12 08:04:39
         compiled from showAlbum.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的博客</title>
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/allFore.css">

</head>
<body>
	<div class="container">
		<div class="info">
			<nav>
				<ul>
					<li><a href="index.php">主页</a></li>
					<li><a href="article.php">博文</a></li>
					<li><a href="albummanager.php">图册</a></li>
					<li><a href="video.php">视频</a></li>
					<li><a href="loginout.php">离开</a></li>
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
			<!-- 博文模块 -->
			<div class="essay">
				<div class="atc_nav">
				<h2>相册目录</h2>
<!-- 					<button>添加视频</button> -->
				</div>
				<?php $_from = $this->_tpl_vars['albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
				<section class="album_pic">
					<a href="picture.php?albumid=<?php echo $this->_tpl_vars['row']['albumid']; ?>
">
						<div class="album">
							<img class="preview" src="image/bg.jpg" alt="picture">
						</div>
					</a>
					<p><?php echo $this->_tpl_vars['row']['albumname']; ?>
</p>
				</section>
				<?php endforeach; endif; unset($_from); ?>
				
				

			</div>

	</div>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>