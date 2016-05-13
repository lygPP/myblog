<?php /* Smarty version 2.6.18, created on 2016-05-12 08:05:39
         compiled from showArtical.html */ ?>

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
				<div class="atc_title">
					<h2><?php echo $this->_tpl_vars['row']['articletitle']; ?>
</h2>
					<p><b>概要：<?php echo $this->_tpl_vars['row']['articlesummary']; ?>
</b></p>
					<p>
						<span>发表于 <?php echo $this->_tpl_vars['row']['articledate']; ?>
</span>
						<span>阅读（<?php echo $this->_tpl_vars['row']['readnum']; ?>
）</span>
						<span><a href="toshowarticle.php?articleid=<?php echo $this->_tpl_vars['row']['articleid']; ?>
&supportnum=<?php echo $this->_tpl_vars['row']['supportnum']; ?>
">顶（<?php echo $this->_tpl_vars['row']['supportnum']; ?>
）</a></span>
						<a href="article.php"><button>返回博文目录</button></a>
					</p>
				</div>
				<div class="showAtc">
					<?php echo $this->_tpl_vars['row']['articletext']; ?>

				</div>
				<div class="page">
					<ul class="pagination">
						<li><a href="toshowarticle.php?articleid=<?php echo $this->_tpl_vars['prev']; ?>
">上一篇</a></li>
						<li><a href="toshowarticle.php?articleid=<?php echo $this->_tpl_vars['next']; ?>
">下一篇</a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>