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



$rs=mysqli_query($conn,"select * from user_db where email='$u_email'");
if(mysqli_num_rows($rs)>0)
{

?>
<script type="text/javascript">
alert("User Already Exists, please use another Email id");
window.location.href = "index.html";
</script>
<?php

}
else
{

$pass=md5($u_password);
$sql = "INSERT INTO user_db (user_name, email, password, department, user_type)
VALUES ('$u_name', '$u_email', '$pass', '$u_department', '1')";

if ($conn->query($sql) === TRUE) {
    ?>
	<script type="text/javascript">
	alert("You Have successfully registered,you can use your credentials for Login");
	window.location.href = "../login/login.php";
	</script>
	<?php
  	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
