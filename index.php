<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$cookie_ip = "ip";
$cookie_user = "user";
$cookie_pw = "pw";
if(isset($_COOKIE[$cookie_ip]) && isset($_COOKIE[$cookie_user]) && isset($_COOKIE[$cookie_pw])) 
{
	header("Refresh: 0;url=connectSuccess.php");
}
?>
<html>
    <head>
        <title>Projektgrupp 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
		<h1 class="title">Projektgrupp 4</h1>
		<h2 class="title">Projekt och projektmetoder (II1302)</h2>
		<h3 class="title">Kungliga Tekniska Högskolan</h3>
		<p class="minititle">PRODUKT</p>
		<p>Webb-applikation för att styra en LEGO robot (EV3) med hjälp av en Rasberry Pi</p>
		<p class = "minititle"> PROJEKTGRUPP</p>
		<div class ="grupp">
			<ul class="team">
				<li>Kim<ul class="sub"><li>Web master</li></ul> </li>
				<li>Albin <ul class="sub"><li>Hardware master</li></ul></li>
				<li>Henrik <ul class="sub"><li>SCRUM master</li></ul></li>   
				<li>Fredrik <ul class="sub"><li>Test master</li></ul></li> 
			</ul>
		</div>
		<div class="steer">
			<p class="smalltitle">Styrknappar</p>
			<div class="top">
				<input type="image" src="resources/images/up.jpg" alt="Submit" width="48" height="48">
			</div>
			<div class="rightleft">
				<span class="left">
					<input type="image" src="resources/images/left.jpg" alt="Submit" width="48" height="48">
				</span>
				<span class="right">
					<input type="image" src="resources/images/right.jpg" alt="Submit" width="48" height="48">
					<span>
			</div>
			<div class="down">
				<input type="image" src="resources/images/down.jpg" alt="Submit" width="48" height="48">
			</div>
			<div class= "anslut">
				<p class = "connect">Anslut en robot</p>
				<form action="connect.php" method="POST">
					<p class="inputlabel">IP-adress: <input type="text" name="ip"> </p>
					<p class="inputlabel">Namn:<input type="text" name="user" class="t"> </p>
					<p class="inputlabel">Lösenord: <input type="password" name="pw"> </p>
					<p class="button"> <button>Anslut</button></p>
				</form>
			</div>
		</div>
    </body>
</html>
