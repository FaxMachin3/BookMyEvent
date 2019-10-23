<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="styles.css">
<title>Login</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

.error {
	position: relative;
	border-radius:3px;
	color:#ff0000;	
}

body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.4em;
}

a { text-decoration: none; }

h1 { font-size: 1em; }

h1, p {
margin-bottom: 10px;
}

strong {
font-weight: bold;
color: #F8F8FF;
}

.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 300px;
}

form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}

form fieldset input[type="submit"] {
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

form fieldset input[type="submit"]:hover {
background-color: #ccc;
color: #000;
}

form fieldset a {
color: #5a5656;
font-size: 10px;
padding-left:5px;
}

form fieldset a:hover { text-decoration: underline; }

size{
padding-left: 95px;
font-size: 10px;
}

.pos{
	position:relative;
	top:232px;
}


</style>
<div><?php include 'header.php'; ?></div>
</head>
<body>

<?php

if(!isset($_SESSION['name']))
{
	// Create connection
	$conn = mysqli_connect("localhost","root","","bms");

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$err="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST["submit"]))
			{
				$luser=test_input($_POST["luser"]);
				$lpass=test_input($_POST["lpass"]);
				$query=mysqli_query($conn,"select * from details where user='$luser' and pass='$lpass'");
				if(mysqli_num_rows($query)>0)
					{
						$_SESSION['name']=$luser;
						header("location:main.php");
					}
				else
						$err="Check your username or password";
			}
	}
	mysqli_close($conn);
}
else
	header("location:main.php");
?>

<div id="login">
<h1 style="position:relative;left:10px;"><strong>Welcome! Please login.</strong></h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<fieldset>
<p><strong>Username:</strong>
<input type="text" name="luser" placeholder="Username" value="<?php if (isset($_POST['luser'])) echo $_POST['luser']; ?>" required></p>
<p><strong>Password:</strong>
<input type="password" name="lpass" placeholder="Password" value="<?php if (isset($_POST['lpass'])) echo $_POST['lpass']; ?>" required></p>
<p style="color:#F8F8FF;"><a href="#" style="color:#F8F8FF;">Forgot Password?</a> <size><input type="checkbox" checked="checked" name="remember">Remember me</size></p>	
<p><span class="error"><?php echo $err;?></span></p>
<p><input type="submit" name="submit" value="login"></p>
</fieldset>
</form>
</div> <!-- end login -->

</body>

<footer>
<div class="pos"><?php include 'footer.php' ?></div>
</footer>
</html>