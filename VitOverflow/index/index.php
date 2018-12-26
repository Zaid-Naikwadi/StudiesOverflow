
<?php

if (isset($_COOKIE['email_id']) && isset($_COOKIE['password']) && isset($_COOKIE['session']))
{
  header("Location:../home/home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>


	<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/aes.js"> 
		
	function vali()
	{
		var pas=document.forms["myform"]["u_password"].value;
		var conpas=document.forms["myform"]["confirmp"].value;
		if(pas==conpas)
		{
          var pass=document.getElementById("upassword").value;
          var encryptedAES = CryptoJS.AES.encrypt(pass, "My Secret Passphrase");
          document.getElementById("upassword").value=encryptedAES;


			
        	return true;
		}
		alert("Password doesn't match");
		return false;
	}


	</script>
<title>VIT Overflow</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>


<!--
  <h2 id="head1">Vit Overflow</h2>

</header>-->
  <div class="navbar">
    <!--<img src="index.jpg" widh=50 height=50 class="center">-->
    <div class="dropdown" style="float:right;">
  <a href="../login/login.php">Login</a>
</div>
  
  <!--<a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> -->
</div>


<section>
  <nav>

   <div class="container">


	<h2>Ask, Learn, Explore!</h2><br>
	<h3>Vit Overflow is a forum aimed to clear the doubts of students</h3><br>
			
	<h3>Join the future largest network of Students & Teachers Today! </h3>

	
  </nav>
  
  <article>
    <form onsubmit="return vali()" name="myform" action="signup.php" method="post">
        <label>Display Name</label><input type="text" name="u_name" placeholder="Eg. Abc123" required><br>
    <label>Email</label><input type="email" name="u_email"  placeholder="Eg. Abc@xyz.com" required><br>
    	
    	<label>Password</label><input id="upassword" name="u_password" type="password" minlength="6" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{6,}$" placeholder="Password Must contain at least 1 Special Character,1 Uppercase,1 Number" oninvalid="setCustomValidity('Password Must contain at least 1 Special Character,1 Uppercase,1 Number')" oninput="setCustomValidity('')" 
      maxlength="30" required><br>

    	<label>Confirm Password</label><input name="confirmp" type="password" minlength="5" placeholder="Confirm Password" maxlength="30" required><br>
    		<label>Department</label><select id="department" name="u_department" required>

    <option value="Computer">Computer</option>
    <option value="IT">IT</option>
    <option value="ENTC">ENTC</option>
  </select>
  
  <input type="submit" value="Sign Up" id="sub"  >
    
    </form>
  </article>
</section>

<footer>
  <div class="navbar">
    
    <div class="dropdown" style="float:right;">
  <a href="#About Us">About Us</a>
  <a href="#About Us">Contact Us</a>
</div>
</footer>

</body>
</html>
