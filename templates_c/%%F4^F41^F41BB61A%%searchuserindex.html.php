<?php /* Smarty version 2.6.18, created on 2016-05-11 06:47:42
         compiled from searchuserindex.html */ ?>
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
					<li><a href="deleteuser.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
&pic=<?php echo $this->_tpl_vars['pic']; ?>
">删除该用户</a></li>
				</ul>
			</nav>
			<div class="bg-color">
				<div class="info-list">
					<div>
					<img class="toux" src="userpic/<?php echo $this->_tpl_vars['pic']; ?>
" alt="我的头像">
					<section>
						<p>My name is <span> <?php echo $this->_tpl_vars['username']; ?>
 </span></p>
						<p>My Job : <span> <?php echo $this->_tpl_vars['job']; ?>
 </span></p>
						<p><span>Description : </span><?php echo $this->_tpl_vars['detail']; ?>
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
					<a href="#">
						<div class="date">
							<span>08</span>
							<span>2015/04</span>
						</div>
					</a>
					<p><?php echo $this->_tpl_vars['row']['articletitle']; ?>
</p>
					<p><?php echo $this->_tpl_vars['row']['articlesummary']; ?>
</p>
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