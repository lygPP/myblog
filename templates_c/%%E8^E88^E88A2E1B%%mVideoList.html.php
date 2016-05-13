<?php /* Smarty version 2.6.18, created on 2016-05-10 11:22:45
         compiled from mVideoList.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的视频管理目录</title>
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
			<!-- 博文目录模块 -->
			<div class="atcList">
				<div class="atc_nav">
				<h2>视频分享目录</h2>
					<a href="sharevideo.php"><button>添加视频</button></a>
				</div>
				<div class="atc_main">
					<?php $_from = $this->_tpl_vars['videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
					<p class="atcTiltle">
						<a href="<?php echo $this->_tpl_vars['row']['videolink']; ?>
"><?php echo $this->_tpl_vars['row']['videolink']; ?>
</a>
						<span class="delMdf"><a href="deletevideo.php?videoid=<?php echo $this->_tpl_vars['row']['videoid']; ?>
">删除</a>
					</p>
					<?php endforeach; endif; unset($_from); ?>
				</div>
				<div class="page">
					<ul class="pagination">
						<?php if ($this->_tpl_vars['pageinfo']['current_page'] != 1): ?>
						<li class="disable"><a href="video.php?page=1">首页</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageinfo']['prev_page']): ?>
						<li class="disable"><a href="video.php?page=<?php echo $this->_tpl_vars['pageinfo']['prev_page']; ?>
">上一页</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageinfo']['next_page']): ?>
						<li class="disable"><a href="video.php?page=<?php echo $this->_tpl_vars['pageinfo']['next_page']; ?>
">下一页</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageinfo']['page_end'] > $this->_tpl_vars['pageinfo']['page_end']['row_total']): ?>
						<li class="disable"><a href="video.php?page=<?php echo $this->_tpl_vars['pageinfo']['page_num']; ?>
">尾页</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- 博文模块结束 -->

	<script type="text/javascript" src="../js/index.js"></script>
</body>
</html>