
<html>
<title>User login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?
session_start();
if(isset($_SESSION['email'])){
header("location:index1.php");}

if(isset($_SESSION['message'])){
echo "<div id='error_msg'>".$_SESSION['message']."</div>";
unset($_SESSION['message']);
}
?>
<div class="simple-form">
 <div class="logozone"> <a href="login.php"><img src="images/logo.jpg" alt="" border="0" /></a> </div>
<br><hr><br><hr><br><hr><br>
<form method="post" action="process.php">
<div >
<label id="but">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="email" id="button"><br><br>
</div>
<div >
<label id="but">Password:</label>
<input type="password" name="password" id="button"><br><br>
</div>
<div >
&nbsp;&nbsp;&nbsp;<button type="submit" name="Login" id="butt">Login</button>
</div>
<p id="but"> 
Not a member? <a href="index.php">Sign up</a>
</p>
</form>

</body>
</html>