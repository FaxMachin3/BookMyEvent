<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Username: " . $row["user"]. " - Email: " . $row["email"]. " - Name: " . $row["name"]. " - Pass: " .$row["pass"] ."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
*/
?>

<?php
	// Create connection
	$conn = mysqli_connect("localhost","root","","bms");

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
				$query=mysqli_query($conn,"select * from details where user='prateek' and pass='1234'");
				if(mysqli_num_rows($query)>0)
					{
						while($row = mysqli_fetch_assoc($query)) 
						{
							$name=$row["use"];
							echo $name;
							//$_SESSION['name']=$luser;
						}
					}
	mysqli_close($conn);
?>