<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>VIT Overflow</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login_css.css">
</head>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>


  

  <div class="navbar">
    
    
    <div class="dropdown" style="float:right;">
      <a href="../index/index.html">Sign Up</a>


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
    <form name="myform" action="login_action.php" method="post">
        
    <label>Email</label><input type="email" name="u_email"  placeholder="Eg. Abc@xyz.com" name="email" required><br>
      
      <label>Password</label><input type="Password" name="u_password" minlength="6" required><br>
      
  
  <input type="Submit" value="Login">
    
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
