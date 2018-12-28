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


$user_id = $_COOKIE['user_id'];
$newnotification = 0;
$notification = "";

		$sql = "SELECT new_notifications FROM user_db WHERE user_id='$user_id'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$newnotification = $row["new_notifications"];
			}

		}	

		if($newnotification == 1){
			$sql = "SELECT notification FROM notification_db WHERE user_id='$user_id'";
			$result = $conn->query($sql);
			$cnt = 0;

			

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$notification .= $row["notification"];
					$cnt++;
				}
		}
	}
	echo json_encode(array($cnt, $notification));

?>