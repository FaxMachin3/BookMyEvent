<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Pay</title>
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
	top:378px;
}

input[type="submit"] {
	position:relative;
	top:40px;
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

</style>
<div><?php include 'header.php'; ?></div>
</head>

<body>
<center>
<?php
if(!isset($_SESSION['name']))
	header("location:login.php");
?>

<div class="block" style="width:1240px;height:300px">

<center><h2 style="color:#ff3232"><u>Select the mode of payment</u></h1>
<form action="redirect.php" method="post">
<input type="radio" name="pay" value="paytm"><img src="Paytm_logo.png" width="100px" height="40px"><br>
<br>
<input type="radio" name="pay" value="pag"><img src="pag1.png" width="100px" height="40px"><br>
<input type="submit" value="submit">
</form>
</center>

</div>
</center>
</body>
<footer>
<div class="pos"><?php include 'footer.php' ?></div>
</footer>
</html>