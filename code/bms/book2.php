<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Register</title>
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
line-height: 1.5em;
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
#register {
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
	top:88px;
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

	$err=$emailErr=$mobErr="";
	$flag=FALSE;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST["submit"]))
			{
				$tleader=test_input($_POST["tleader"]);
				$tname=test_input($_POST["tname"]);
				$temail=test_input($_POST["temail"]);
				$tmob=test_input($_POST["tmob"]);
				if(!filter_var($temail, FILTER_VALIDATE_EMAIL)){
					$emailErr="Invalid email format";
					$flag=TRUE;
				}
				if(!(strlen($tmob)==10) || !is_numeric($tmob)) {
					$mobErr = 'Invalid phone number';
					$flag=TRUE;
				}
				$query=mysqli_query($conn,"select * from bookdetails where email='$temail' or mob='$tmob'");
				if(mysqli_num_rows($query)>0){
					$err="You are already registered";
					$flag=TRUE;
				}
				if($flag==FALSE)
				{
					mysqli_query($conn,"insert into bookdetails (tleader,tname,email,mob) values ('$tleader','$tname','$temail','$tmob')");
					$_SESSION['tleader']=$tleader;
					$_SESSION['tname']=$tname;
					$_SESSION['temail']=$temail;
					$_SESSION['tmob']=$tmob;
					header("location:pay.php");
				}
			}
	}
	mysqli_close($conn);
}
?>

<div id="register">
<h1 style="position:relative;left:10px;"><strong>GAME ON!</strong></h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<p><strong>Team Leader:</strong>
<input type="text" name="tleader" placeholder="Enter leader name" value="<?php if (isset($_POST['tleader'])) echo $_POST['tleader']; ?>" required></p>
<p><strong>Team Name:</strong>
<input type="text" name="tname" placeholder="Enter team name" value="<?php if (isset($_POST['tname'])) echo $_POST['tname']; ?>" required></p>
<p><strong>Email:</strong>
<input type="text" name="temail" placeholder="example@bms.com" value="<?php if (isset($_POST['temail'])) echo $_POST['temail']; ?>" required></p>
<p><span class="error"><?php echo $emailErr;?></span></p>
<p><strong>Mobile no.:</strong>
<input type="text" name="tmob" placeholder="e.g. 9090909090" value="<?php if (isset($_POST['tmob'])) echo $_POST['tmob']; ?>" required></p>
<p><span class="error"><?php echo $mobErr;?></span></p>
<p><span class="error"><?php echo $err;?></span></p>
<p><input type="submit" name="submit" value="Pay"></p>
</fieldset>
</form>
</div> <!-- end sign up-->

</body>
<footer>
<div class="pos"><?php include 'footer.php' ?></div>
</footer>
</html>