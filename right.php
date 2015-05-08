<?php
$cookie_ip = "ip";
$cookie_user = "user";
$cookie_pw = "pw";
if(!isset($_COOKIE[$cookie_ip]) || !isset($_COOKIE[$cookie_user]) || !isset($_COOKIE[$cookie_pw])) 
{
	header("Refresh: 0;url=connectFail.php");
}
else 
{
	if(!($con = ssh2_connect($_COOKIE[$cookie_ip], 22)))
	{
		echo "fail: unable to establish connection\n";
		header("Refresh: 0;url=connectFail.php");
   		break; 
	} 
	else 
	{
    	// try to authenticate with username root, password secretpassword
    	if(!ssh2_auth_password($con, $_COOKIE[$cookie_user], $_COOKIE[$cookie_pw])) 
    	{
			echo "fail: unable to establish connection\n";
			setcookie($cookie_ip, "", time() -(1000), "/");
			unset($_COOKIE[$cookie_ip]);
			setcookie($cookie_user, "", time() -(1000), "/");
			unset($_COOKIE[$cookie_user]);
			setcookie($cookie_pw, "", time() -(1000), "/");
			unset($_COOKIE[$cookie_pw]);
			header("Refresh: 0;url=connectFail.php");
 		} 
    	else 
    	{
	    	if (!($stream = ssh2_exec($con, "python right.py"))) 
	    	{
				setcookie($cookie_ip, "", time() -(1000), "/");
				unset($_COOKIE[$cookie_ip]);
				setcookie($cookie_user, "", time() -(1000), "/");
				unset($_COOKIE[$cookie_user]);
				setcookie($cookie_pw, "", time() -(1000), "/");
				unset($_COOKIE[$cookie_pw]);
				header("Refresh: 0;url=connectFail.php");
      		} 
      		else 
			{
				// collect returning data from command
				//	stream_set_blocking($stream, true);
				//	$data = "";
				//	while ($buf = fread($stream,4096)) 
				//	{
				//		$data .= $buf;
				//	}
				header("Refresh: 0;url=index.php");
				fclose($stream);
        	}
		}
	}
}   
//	if (!($stream = ssh2_exec($con, "export DISPLAY=:0; emacs /home/pi/mindstorm2.py;"))) 
?>
