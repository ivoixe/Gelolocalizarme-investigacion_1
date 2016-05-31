<?php
	$fp = fopen('data_'.date('H:i').'.txt', 'w');
	
	$_POST['resultado'] = json_decode($_POST['resultado']);
	fwrite($fp, print_r($_POST,1));
	fclose($fp);
	
	unset($_POST['resultado']);
	
	echo json_encode($_POST);