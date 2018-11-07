<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vitoverflow";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

extract($_POST);

$rs=mysqli_query($conn,"select * from user_db where email='$u_email' and password='$u_password'");
if(mysqli_num_rows($rs)<1)
{
?>
	<script type="text/javascript">
	alert("Invalid Credentials");
	window.location.href = "login.html";
	</script>
	<?php
}
else
{
session_start();
while ($row=mysqli_fetch_row($rs))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    $_SESSION["user_id"] = $row[0];
    $_SESSION["user_name"] = $row[1];
    }
$_SESSION["login"]=$u_email;
}

if (isset($_SESSION["login"]))
{

	
	print_r($_SESSION["login"]);
	$_SESSION["loggedIn"] = true;
	header("Location:../home/home.php");//replace your url here (after login)
	die();

exit;
}



$conn->close();
?>
