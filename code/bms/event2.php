<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Counter Strike - Global Offensive</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">

.block{
	position: relative;
	top:40px;
	padding:10px;
	border-radius:10px;
	background-color: #000;
	opacity:0.7;
	color:#fff;
	text-align: justify;
	
}

.pos{
	position:relative;
	top:200px;
}

input[type="submit"] {
	position:relative;
	top:100px;
	background-color: #333;
	border: none;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	color: #f4f4f4;
	cursor: pointer;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	height: 50px;
	text-transform: uppercase;
	width: 280px;
	-webkit-appearance:none;
}

input[type="submit"]:hover {
background-color: #ccc;
color: #000;
}
</style>
<div><?php include 'header.php'; ?></div>
</head>

<body>

<?php
if(!isset($_SESSION['name']))
{
	echo '<script>function myFunc(){
		alert(("Sorry! You need to login"));
		}
		</script>';
}
?>

<center><div class="block" style="width:1240px;height:520px"><center><img src="slide3.jpg"></center></div>

<p></p>

<div class="block" style="width:1240px;height:220px">
<p><center><h2 style="color:#ff3232"><u>Counter Strike Global Offensive</u><h2></center></p>

<p>Counter-Strike: Global Offensive (CS:GO) is a multiplayer first-person shooter video game developed by Hidden Path Entertainment and Valve Corporation. It is the fourth game in the Counter-Strike series and was released for Microsoft Windows, OS X, Xbox 360, and PlayStation 3 in August 2012, with the Linux version released in September 2014. The game pits two teams against each other: the Terrorists and the Counter-Terrorists. Both sides are tasked with eliminating the other while also completing separate objectives, the Terrorists, depending on the game mode, must either plant the bomb or defend the hostages, while the Counter-Terrorists must either prevent the bomb from being planted, defuse the bomb, or rescue the hostages. There are six game modes, all of which have distinct characteristics specific to that mode.</p>
</div>

<p></p>

<div class="block" style="width:1240px;height:200px">
<p><center><b style="color:#ff3232"><u>Venue</b></u></center></p>
<p><b style="color:#ff3232">20th April 2018</b>, Institute of Technical Education & Research (ITER), Jagamara, Khandagiri, Bhubaneswar, Odisha 751030.</p>
<p>ITER is the Faculty of Engineering and Technology of Siksha 'O' Anusandhan.   It is located in Campus 1 of the SOA. ITER is the oldest constituent institute of the SOA, having seen light in 1997.  It has grown from a fledgling campus with a single three storied building (Academic Block) to one of the best engineering campuses in Eastern India.</p>
</div>

<div><center>
<form method="post" action="book2.php">
<input type="submit" value="REGISTER" onclick="myFunc()"></p></a></center>
</form>
</div>
</center>
</body>
<footer>
<div class="pos"><?php include 'footer.php' ?></div>
</footer>
</html>