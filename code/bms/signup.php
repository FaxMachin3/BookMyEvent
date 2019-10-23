<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Sign Up</title>
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

/* ---------- SIGNUP ---------- */
#signup {
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
}

form fieldset a:hover { text-decoration: underline; }

.pos{
	position:relative;
	top:8px;
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

	$err=$nameErr=$emailErr=$mobErr=$userErr=$passErr="";
	$flag=FALSE;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST["submit"]))
			{
				$sname=test_input($_POST["sname"]);
				$semail=test_input($_POST["semail"]);
				$smob=test_input($_POST["smob"]);
				$suser=test_input($_POST["suser"]);
				$spass=test_input($_POST["spass"]);
				if(!preg_match("/^[a-zA-Z ]*$/",$sname)){
					$nameErr="Only letters and white space allowed";
					$flag=TRUE;
				}
				if(!filter_var($semail, FILTER_VALIDATE_EMAIL)){
					$emailErr="Invalid email format";
					$flag=TRUE;
				}
				if(!(strlen($smob)==10) || !is_numeric($smob)) {
					$mobErr = 'Invalid phone number';
					$flag=TRUE;
				}
				if(!(strlen($suser)>=5)) {
					$userErr = 'Username must contain atleast 5 character';
					$flag=TRUE;
				}
				/*
				if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$spass)){
					$passErr="Password doesn't meet the requirments";
					$flag=TRUE;
				}
				*/
				$query=mysqli_query($conn,"select * from details where email='$semail' or user='$suser' or mob='$smob'");
				if(mysqli_num_rows($query)>0) {
					$err="User or Email already exists";
					$flag=TRUE;
				}				
				if($flag==FALSE)
					{
						mysqli_query($conn,"insert into details (user,email,mob,name,pass) values ('$suser','$semail','$smob','$sname','$spass')");
						$_SESSION['name']=$suser;
						header("location:main.php");
					}
			}
	}
	mysqli_close($conn);
}
else
	header("location:main.php");
?>

<div id="signup">
<h1 style="position:relative;left:10px;"><strong>Welcome! Please fill the form.</strong></h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<fieldset>
<p><strong>Name:</strong>
<input type="text" name="sname" placeholder="Enter your name" value="<?php if (isset($_POST['sname'])) echo $_POST['sname']; ?>" required></p>
<p><span class="error"><?php echo $nameErr;?></span></p>
<p><strong>Email:</strong>
<input type="text" name="semail" placeholder="example@bms.com" value="<?php if (isset($_POST['semail'])) echo $_POST['semail']; ?>" required></p>
<p><span class="error"><?php echo $emailErr;?></span></p>
<p><strong>Phone:</strong>
<input type="text" name="smob" placeholder="e.g. 9090909090" value="<?php if (isset($_POST['smob'])) echo $_POST['smob']; ?>" required></p>
<p><span class="error"><?php echo $mobErr;?></span></p>
<p><strong>Username:</strong>
<input type="text" name="suser" placeholder="Username" value="<?php if (isset($_POST['suser'])) echo $_POST['suser']; ?>" required></p>
<p><span class="error"><?php echo $userErr;?></span></p>
<p><strong>Password:</strong>
<input type="password" name="spass" placeholder="Password" value="<?php if (isset($_POST['spass'])) echo $_POST['spass']; ?>" required></p>
<p><span class="error"><?php echo $passErr;?></span></p>
<p><span class="error"><?php echo $err;?></span></p>
<p><input type="submit" name="submit" value="sign up"></p>
</fieldset>
</form>
</div> <!-- end sign up-->

</body>

<footer>
<div class="pos"><?php include 'footer.php' ?></div>
</footer>
</html>