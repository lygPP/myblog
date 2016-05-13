<?php /* Smarty version 2.6.18, created on 2016-05-12 07:35:25
         compiled from adminindex.html */ ?>
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
					<li><a href="templates/adminsearch.html">管理用户</a></li>
				</ul>
			</nav>
			<div class="bg-color">
				<div class="info-list">
					<div>
					<img class="toux" src="userpic/<?php echo $_SESSION['pic']; ?>
" alt="我的头像">
					<section>
						<p>欢迎你！亲爱的管理员： <span> <?php echo $_SESSION['username']; ?>
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
				<h2>博文目录</h2>
<!-- 					<button>添加视频</button> -->
				</div>
				<?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
				<section class="item">
					<a href="toshowarticle.php?articleid=<?php echo $this->_tpl_vars['row']['articleid']; ?>
">
						<div class="date">
							<span>08</span>
							<span>2015/04</span>
						</div>
					</a>
					<p><?php echo $this->_tpl_vars['row']['articletitle']; ?>
</p>
					<p><?php echo $this->_tpl_vars['row']['articlesummary']; ?>
</p>
					<p><i>浏览量：<?php echo $this->_tpl_vars['row']['readnum']; ?>
</i></p>
				</section>
				<?php endforeach; endif; unset($_from); ?>
				

				<div class="page">
					<ul class="pagination">
						<li class="disable"><a href="#">&laquo</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">&raquo</a></li>
					</ul>
				</div>
			</div>
		<!-- 博文模块结束 -->
			<!-- 图片模块 -->
			<div>
				




			</div>



		</div>



		<div></div>
		<div></div>




	</div>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>