<?php
$cookie_name = "ip";
if(!isset($_COOKIE[$cookie_name])) 
{
	echo "Cookie named " . $cookie_name . "' is not set!";
} 
else 
{
	echo "Ip cookie exists <br>";
	if(!($con = ssh2_connect($_COOKIE[$cookie_name], 22)))
	{
		echo "fail: unable to establish connection\n";
		header("Refresh: 0;url=connectFail.php");
   	break; 
	} 
	else 
	{
    	// try to authenticate with username root, password secretpassword
    	if(!ssh2_auth_password($con, "pi", "742")) 
    	{
      	echo "fail: unable to authenticate\n";
		 	echo $data; 
 	   } 
    	else 
    	{
	    	if (!($stream = ssh2_exec($con, "cd /home/pi; python mindstorm2.py;"))) 
	    	{
         	echo "fail: unable to execute command\n";
      	} 
      	else 
	      {
	     		echo "<br>";
        		echo "command success";
            // collect returning data from command
            stream_set_blocking($stream, true);
            $data = "";
            while ($buf = fread($stream,4096)) 
            {
                $data .= $buf;
            }
            //fclose($stream);
            //echo "<br>";
            //echo "Command result: ";
            //echo $data;
        	}
		}
	}
}   
?>