<?php
	$sendto="gupta.shruti@hotmail.com";
	$subject="email testing";
	$msg="testing mail to see if we have recieve this"."\n";
	echo $msg
	$header= "From:Mainmail <nikhila.gupta@hotmail.com\r\n";
	$header= "Relpy-To: nikhila.shruti@icloud.com\r\n";
	if(mail('gupta.shruti@hotmail.com',$subject,$message,$header))
?>