<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$cookie_name = "ip";
if(!isset($_COOKIE[$cookie_name])) 
{
	header("Refresh: 0;url=connectFail.php");
}
else 
{
	
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
    <form action="forward.php" method="POST">
    <input type="image" src="resources/images/up.jpg" alt="Submit" width="48" height="48">
    </form>
    </div>
    <div class="rightleft">
    <span class="left">
    <form action="left.php" method="POST">
    <input type="image" src="resources/images/left.jpg" alt="Submit" width="48" height="48">
    </form>
    </span>
    <span class="right">
    <form action="right.php" method="POST">
    <input type="image" src="resources/images/right.jpg" alt="Submit" width="48" height="48">
    </form>
    <span>
    </div>
    <div class="down">
    <form action="down.php" method="POST">
    <input type="image" src="resources/images/down.jpg" alt="Submit" width="48" height="48">
    </form>
    </div>
    <div class= "anslut">
	<form action="connect.php" method="POST">
	<p class="successlabel">Anslutningen lyckades, använd styrknapparna för att styra roboten</p>
	<form action="disconnect.php" method="POST">
	<p class="button"> <button>Koppla ifrån</button></p>
	</form>
	</div>
	</div>
    </body>
</html>
