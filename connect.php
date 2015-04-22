<?php
if (!function_exists("ssh2_connect")) die("function ssh2_connect doesn't exist");
// log in at server1.example.com on port 22
if(isset($_POST)){
    $ip = $_POST['ip'];
    echo "ip:  ";
    echo $ip;
    echo "<br>";
    // etc etc

    // if all error checks pass, then echo out - thanks for taking part in our survey!
}
if(!($con = ssh2_connect("$ip", 22))){
    echo "fail: unable to establish connection\n";
      header("Refresh: 0;url=connectFail.php");
   	break; 
} else {
	$cookie_name = "ip";
	$cookie_value = $ip;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    // try to authenticate with username root, password secretpassword
    if(!ssh2_auth_password($con, "pi", "742")) {
        echo "fail: unable to authenticate\n";
		 echo $data; 
    } else {
        // allright, we're in!
        echo "okay: logged in...\n";

        // execute a command
        if (!($stream = ssh2_exec($con, "ls" ))) {
            echo "fail: unable to execute command\n";
        } else {
        		echo "<br>";
        		echo "command success";
            // collect returning data from command
            stream_set_blocking($stream, true);
            $data = "";
            while ($buf = fread($stream,4096)) {
                $data .= $buf;
            }
            fclose($stream);
            echo "<br>";
            echo "Command result: ";
            echo $data;
        }
        header("Refresh: 0;url=connectSuccess.php");
   	  break; 
    }
}
?>
