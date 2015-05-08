<?php
if (!function_exists("ssh2_connect")) die("function ssh2_connect doesn't exist");
// log in at server1.example.com on port 22
if(isset($_POST))
{
    $ip = $_POST['ip'];
    $user = $_POST['user'];
    $pw = $_POST['pw'];
}
if(!($con = ssh2_connect("$ip", 22))){
    echo "fail: unable to establish connection\n";
    header("Refresh: 0;url=connectFail.php");
   	break; 
} else {
	
    // try to authenticate with username root, password secretpassword
    if(!ssh2_auth_password($con, "$user", "$pw")) {
        echo "fail: unable to authenticate\n";
		echo $data; 
    } else {
        // allright, we're in!
        echo "okay: logged in...\n";
        $cookie_name = "ip";
		$cookie_value = $ip;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		
		$cookie_name = "user";
		$cookie_value = $user;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		
		$cookie_name = "pw";
		$cookie_value = $pw;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        header("Refresh: 0;url=connectSuccess.php");
   		break; 
    }
}
?>
