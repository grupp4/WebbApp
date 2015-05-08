<?php
	$cookie_ip = "ip";
	$cookie_user = "user";
	$cookie_pw = "pw";
	setcookie($cookie_ip, "", time() -(1000), "/");
	unset($_COOKIE[$cookie_ip]);
	setcookie($cookie_user, "", time() -(1000), "/");
	unset($_COOKIE[$cookie_user]);
	setcookie($cookie_pw, "", time() -(1000), "/");
	unset($_COOKIE[$cookie_pw]);
	header("Refresh: 0;url=index.php");
?>
