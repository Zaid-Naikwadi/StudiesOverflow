<?php
session_start();
if (!isset($_COOKIE['email_id']) || !isset($_COOKIE['password']) || !isset($_COOKIE['session'])) {
    echo("Access denied!");
    exit();
}
?>

<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="asknewquestion.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
	<title>VIT Overflow -Where students asks</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--for styling input file button. https://stackoverflow.com/questions/572768/styling-an-input-type-file-button-->
	<script>$(document).ready(function(){
		$('#image').change(function(){
		 var fileName = ''; fileName = $(this).val(); $('#file-selected').html(fileName.replace(/^.*\\/, ""));
	});
	});
	</script>

</head>
<body>

	

	<br><br><br>
	<div class="w3-container container">
		<div class="w3-card-4" style="width:50%;">
   			 <header class="w3-container w3-blue">
     			 <h1 style="margin-left: 22%"><b>When in doubt &#128517 Ask it out &#128513</b></h1>
    		</header>

			<div class="w3-container">

	  			<form action="action_page.php" accept="image/gif,image/jpeg,image/jpg" method="post" enctype="multipart/form-data">

    				<label for="fname"><b>Title</b></label>
    				<input type="text" id="fname" name="title_question" placeholder="Title of your question.." required>

    				<!--<label for="lname">Last Name</label>
    				<input type="text" id="lname" name="lastname" placeholder="Your last name..">-->

    				<label for="country"><b>Subject</b></label>
    				<select id="country" name="subject">
      					<option value="c programming">C Programming</option>
      					<option value="oop">OOP</option>
      					<option value="java programming">Java Programming</option>
      					<option value="data structures">Data Structures</option>
      					<option value="computer networks">Computer Networks</option>
      					<option value="operating system">Operating System</option>
      					<option value="microprocessor">Micro-Processor</option>
      					<option value="web technology">Web Technology</option>
      					<option value="compiler design">Compiler Design</option>
    				</select>

    					<br><br>

    				<label for="subject"><b>Description</b></label>
    				<textarea id="subject" name="question" placeholder="Write something.." style="height:200px" required></textarea>

    				<br><br>
    				<label for="image" style="margin-right: 5%" class="custom-file-upload"><b>Attach Image :&nbsp</b><span id='file-selected'></span>
    				<input type="file" name="image" id="image"></label>
    				

    				<br><br><br>
    				<input type="submit" value="Ask Question" class="w3-card-4" style="margin-left: 82%;background-color: #D82112;">
    				<br><br>
  				</form>
  			</div>

  			<footer class="w3-container w3-blue">
      			<h5></h5>
    		</footer>
		</div>
	</div>

	<?php include "../navigation/nav.html"; ?>
</body>
