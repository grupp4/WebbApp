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
if(!isset($_COOKIE[$cookie_ip]) || !isset($_COOKIE[$cookie_user]) || !isset($_COOKIE[$cookie_pw])) 
{
	//header("Refresh: 0;url=connectFail.php");
}
?>
<html id ="cont">
    <head>
        <title>Projektgrupp 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="resources/js/script.js"> </script>
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
		<div id="stream2">
			<span class="stream1"> <p class = "click">SHOW STREAM</p>
		<div id="stream">
			<iframe id="player" type="text/html"
				src="http://www.twitch.tv/grupp4kth/embed"
				frameborder="0"></iframe>
		</div>
		</div>
		<div class="steer2">
			<p class="smalltitle">Styrknappar</p>
			<div class="top">
				<!-- -<form action="forward.php" method = "POST"> -->
				<p>
					<img class ="post" src="resources/images/up.jpg" width="48" height="48"></p>
					<!-- 				</form>  -->
			</div>
			<div class="rightleft">
				<span class="left">
				<!-- -	<p class="inline">  -->
						<img class ="left1" src="resources/images/left.jpg" width="48" height="48"> 	<img class ="right1" src="resources/images/right.jpg" width="48" height="48"> 
				</span>
			</div>
			<div class="down">
				<p>
					<img class ="down1" src="resources/images/down.jpg" width="48" height="48"> </p>
			</div>
			<div class= "anslut">
				<p class="successlabel">Anslutningen lyckades. <br> Använd styrknapparna eller piltangenterna för att styra roboten.</p>
				<form action="disconnect.php" method="POST">
					<p class="button"> <button>Koppla ifrån</button>
				</form>
				<button class="pil">Deaktivera piltangenterna</button></p>
			</div>
		</div>
    </body>
</html>
