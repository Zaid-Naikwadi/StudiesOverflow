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
$pass=md5($u_password);
$rs=mysqli_query($conn,"select * from user_db where email='$u_email' and password='$pass'");
if(mysqli_num_rows($rs)<1)
{
?>
	<script type="text/javascript">
	alert("Invalid Credentials");
	window.location.href = "login.php";
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
    $_SESSION["user_type"] = $row[5];
    $_SESSION["department"] = $row[4];
    }
    


$_SESSION["login"]=$u_email;
}


if (isset($_SESSION["login"]))
{

	if(isset($_POST["remember_me"]))
    {
    	
		setcookie("email_id", $u_email, time() + (86400 * 30), "/");
		setcookie("password", md5($u_password), time() + (86400 * 30), "/");
		setcookie("session", true, time() + (86400 * 30), "/");
		setcookie("user_id", $_SESSION["user_id"] , time() + (86400 * 30), "/");
		setcookie("user_type", $_SESSION["user_type"] , time() + (86400 * 30), "/");
		setcookie("user_dept", $_SESSION["department"] , time() + (86400 * 30), "/");

    }	
    else
    {
    	setcookie("email_id", $u_email, false, "/");
		setcookie("password", md5($u_password), false, "/");
		setcookie("session", true, false, "/");
		setcookie("user_id", $_SESSION["user_id"] , false, "/");
		setcookie("user_type", $_SESSION["user_type"] ,false, "/");
		setcookie("user_dept", $_SESSION["department"] ,false, "/");
    }
    	print_r($_SESSION["login"]);
		$_SESSION["loggedIn"] = true;
		header("Location:../home/home.php");//replace your url here (after login)
		die();


exit;
}



$conn->close();
?>
