<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Register</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
.pos{
	position:relative;
	top:178px;
}
</style>
<div><?php include 'header.php'; ?></div>
</head>
<body>

<?php
if(!isset($_SESSION['name']))
	header("location:login.php");
else
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_POST["pay"]=="paytm")
			include 'paytm.php';
		else if ($_POST["pay"]=="pag")
			include 'pag.php';
		else
			echo "Please! Select an input.";
	}
}
?>

</body>
<footer>
<div class="pos"><?php include 'footer.php' ?></div>
</footer>
</html>