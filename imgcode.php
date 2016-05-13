<?php
	session_start();
	require_once('page/ValidationCode.class.php');
	$image = new ValidationCode(82,20,5);
	$image->showImage();
	$_SESSION['validationcode']=$image->getCheckCode();
?>