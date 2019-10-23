<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Pay</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

.block{
	position: relative;
	top:40px;
	left:150px;
	padding:10px;
	border-radius:10px;
	background-color: #000;
	opacity:0.7;
	color:#fff;
	text-align: justify;	
}

.pos{
	position:relative;
	top:298px;
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

<?php
if(!isset($_SESSION['name']))
	header("location:login.php");
else
{
	// Create connection
	$conn = mysqli_connect("localhost","root","","bms");
	$user=$_SESSION['name'];
	// Check connection
	$msg="";
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query=mysqli_query($conn,"select * from details where user='$user'");
	if(mysqli_num_rows($query)>0)
		{
			while($row = mysqli_fetch_assoc($query)) 
			{
				$name=$row["name"];
				$email=$row["email"];
				$user=$row["user"];
				$mob=$row['mob'];
			}
			$query1=mysqli_query($conn,"select * from bookdetails where email='$email'");
			if(mysqli_num_rows($query1)>0)
					$msg="CSGO";
			else
				$msg="Sorry! You have no bookings";
		}
	else
		header("location:login.php");
	mysqli_close($conn);
}
?>

<div class="block" style="width:1240px;height:380px">

<center><h1 style="color:#ff3232"><u>HELLO</u>, <i><?php echo $_SESSION['name']; ?></i></h1>

<div>
<p><b style="color:#ff3232">Your Details</b></p>
<p><u>Name</u>: <?php echo $name; ?></p>
<p><u>Mail ID</u>: <?php echo $email; ?></p>
<p><u>Username</u>: <?php echo $user; ?></p>
<p><u>Contact</u>: <?php echo $mob; ?></p>
</div>
<br>
<div>
<p><b style="color:#ff3232">Your Bookings</b></p>
<p><?php echo $msg; ?></p>
</div>

</center>

</div>

</body>
<footer>
<div class="pos"><?php include 'footer.php' ?></div>
</footer>
</html>