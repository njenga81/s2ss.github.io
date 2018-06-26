<html>
<head>
<title>User registration form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="simple-form" >
<div class="logozone"> <a href="login.php"><img src="images/logo.jpg" alt="" border="0" /></a> </div>
<br><hr><br><hr><br><hr>
<?php
session_start();

if(isset($_SESSION['email'])){
header("location:index1.php");}

if(isset($_SESSION['message'])){
echo "<div id='error_msg'>".$_SESSION['message']."</div>";
unset($_SESSION['message']);
}
?>
<p>NEW USER REGISTRATION</P>
<form id="registration" method="post" action="process2.php">
<input type="text" name="fname" id="button" placeholder="Enter your first name.." required><br><br>
<input type="text" name="lname" id="button" placeholder="Enter your last name.." required><br><br>
<input type="email" name="email" id="button" placeholder="Enter your Email.."  required ><br><br>
<input type="text" name="username" id="button" placeholder="Desired username" required><br><br>

<input type="password" name="password" minlength="8" id="button" placeholder="*****Password?********" required><br><br>

<button type="submit" name="register" id="butt">Register</button>
<p id="but">
Already a member?&nbsp;<a href="login.php">Sign in</a>
</form>
</div>
</body>
</html>