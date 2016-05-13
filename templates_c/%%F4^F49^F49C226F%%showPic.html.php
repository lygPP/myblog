<?php /* Smarty version 2.6.18, created on 2016-05-12 08:07:55
         compiled from showPic.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的图片</title>
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/showpic.css">

</head>
<body>
	<div class="pic_container">
		<div class="pic_nav">
			<h2>我的图库</h2>
			<a href="index.php"><button>返回首页</button></a>
			<button>幻灯片</button>
		</div>
		<div class="pic_content">
			<div class="pic_box">
				<?php $_from = $this->_tpl_vars['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
				<img src="picture/<?php echo $this->_tpl_vars['row']['picturebath']; ?>
" alt="图片">
				<?php endforeach; endif; unset($_from); ?>
			</div>
			<div class="page">
					<ul class="pagination">
						<?php if ($this->_tpl_vars['pageinfo']['current_page'] != 1): ?>
						<li class="disable"><a href="picture.php?page=1&albumid=<?php echo $this->_tpl_vars['albumid']; ?>
">首页</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageinfo']['prev_page']): ?>
						<li class="disable"><a href="picture.php?page=<?php echo $this->_tpl_vars['pageinfo']['prev_page']; ?>
&albumid=<?php echo $this->_tpl_vars['albumid']; ?>
">上一页</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageinfo']['next_page']): ?>
						<li class="disable"><a href="picture.php?page=<?php echo $this->_tpl_vars['pageinfo']['next_page']; ?>
&albumid=<?php echo $this->_tpl_vars['albumid']; ?>
">下一页</a></li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageinfo']['page_end'] > $this->_tpl_vars['pageinfo']['page_end']['row_total']): ?>
						<li class="disable"><a href="picture.php?page=<?php echo $this->_tpl_vars['pageinfo']['page_num']; ?>
&albumid=<?php echo $this->_tpl_vars['albumid']; ?>
">尾页</a></li>
						<?php endif; ?>
					</ul>
			</div>
		</div>
	</div>
</body>
</html>