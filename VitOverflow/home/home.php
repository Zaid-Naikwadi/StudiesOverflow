<?php
session_start();
if (!isset($_COOKIE['email_id']) || !isset($_COOKIE['password']) || !isset($_COOKIE['session'])) {
    echo("Access denied!");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>VIT Overflow -Where students asks</title>
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<link rel="stylesheet" type="text/css" href="home.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	 $.get("../navigation/getnotificationcount.php", function(data){
        var result = $.parseJSON(data);
        $('#noti_Counter').text(result[0]);
        $("#notificationLabel").text(result[1]);
    });
    $("#IDhome").addClass("active");
});
</script>

</head>
<body>

<button class="button1 close-image w3-btn w3-blue" onclick="location.href='../asknewquestion/asknewquestion.php'"><img src="ask1.png"></img><br><b>Ask new Question</b></button>
<button class="button2 close-image w3-btn w3-blue" onclick="location.href='../seequestions/see1.php'"><img src="questions.png"></img><br><b>View asked questions</b></button>
<button class="button3 close-image w3-btn w3-blue" onclick="location.href='../interviewpreparation/interview.php'"><img src="interview.png"></img><br><b>Interview Preparation</b></button>
<button class="button4 close-image w3-btn w3-blue" onclick="location.href='../events/events.php'"><img src="Event.png"></img><br><b>Events</b></button>

<?php include "../navigation/nav.html"; ?>
</body>
</html>
