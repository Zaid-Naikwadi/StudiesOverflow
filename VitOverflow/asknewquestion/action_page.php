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

session_start();
//for iserting image in db
//https://stackoverflow.com/questions/17717506/how-to-upload-images-into-mysql-database-using-php-code
extract($_POST); 

if (!isset($_COOKIE['email_id']) || !isset($_COOKIE['password']) || !isset($_COOKIE['session'])) {
    echo("Access denied!");
    exit();
}

$user_id =$_COOKIE["user_id"];

if(!empty($_FILES['image']['tmp_name'])){
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$sql = "INSERT INTO questions_db (user_id, question_topic, question_subject, question, image)
VALUES ('{$user_id}', '$title_question', '$subject', '$question', '{$image}')";
}
else{
	$sql = "INSERT INTO questions_db (user_id, question_topic, question_subject, question)
VALUES ('{$user_id}', '$title_question', '$subject', '$question')";
}


if ($conn->query($sql) === TRUE) {
	?>
	<script type="text/javascript">
	alert("Your question was asked successfully!");
	window.location.href = "asknewquestion.php";
	</script>
	<?php
	exit();
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
