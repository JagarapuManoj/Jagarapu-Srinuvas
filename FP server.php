<?php
	date_default_timezone_set("Asia/kolkata");
 	$ct=time();
	$pt=date("Y / m / d ----- H:i:s",$ct);
 	$m_e=$_POST['mobile_email_otp'];

	header("Location:/index.html");
	exit();
?>
