<?php /* Smarty version 2.6.18, created on 2016-05-11 20:14:18
         compiled from modifyInfo.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改个人资料</title>
	<link rel="stylesheet" href="css/allFore.css">
</head>
<body>
	<div class="in_container">
		<div class="reg_box">
			<h2>修改个人资料</h2>
			<form action="modifyuserinfo.php" name="regFrom" method="post" enctype="multipart/form-data">
				<div class="first">
					<div id="toux"><img src="userpic/<?php echo $_SESSION['pic']; ?>
" alt="我的头像"/></div>
					<input id="show" type="file" name="myfile" value="">
				</div>
				<div id="sec" class="sec">
					<p><label for="name">新用户名：</label><input type="text" name="username" id="name" placeholder="" required="required" value="<?php echo $_SESSION['username']; ?>
"><span class="msg"><i class="ati">输入6-25个字符，仅包含英文、汉字及下划线</i></span></p>
					<p class="tips"><b id="charLen">0个字符</b></p>
					<p><label for="passwd">新密码：</label><input type="password" name="password" id="passwd" placeholder="" required="required" value="<?php echo $_SESSION['password']; ?>
"><span class="msg"><i class="ati">输入8-16个字符</i></span></p>
					<p class="tips"><em class="active">弱</em><em>中</em><em>强</em></p>

					<p><label for="passwd">确认密码：</label><input type="password" name="password" id="passwd" placeholder="" disabled="disabled" value="<?php echo $_SESSION['password']; ?>
"><span class="msg"><i class="ati">请再输入一次</i></span></p>
					<p class="tips"></p>
					<p><label for="jobs">工作：</label><input type="text" name="job" id="jobs" placeholder="" required="required" value="<?php echo $_SESSION['job']; ?>
"><span class="msg"><i class="ati">输入6-25个字符，仅包含英文、汉字及下划线</i></span></p>
					<p class="tips"></p>
					<textarea name="detail"><?php echo $_SESSION['detail']; ?>
</textarea>
				</div>
				<div class="third">
					<!-- <input id="submit" type="submit" value=""> --><input id="reset" type="submit" value="修改">
				</div>
				
			</form>
		</div>
	</div>

	<script src="js/match.js"></script>
	<script src="js/toux.js"></script>
	

</body>
</html>