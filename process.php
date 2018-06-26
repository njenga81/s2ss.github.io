<html>

<link href="GAPtranslators.css" rel="stylesheet" type="text/css" />
  <title>logging in..</title><div class="logozone"> <a href="login.php"><img src="images/logo.jpg" alt="" border="0" /></a> </div>
 <br><br>
<?php
session_start();
$email= $_POST['email'];
$password= $_POST['password'];
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;}
$email=test_input($_POST['email']);
$password=test_input($_POST['password']);
$password=md5($password);

$dbhost="localhost:3306";
$dbuser="root";
$dbpass="vertrigo";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
$db=mysqli_select_db($conn,'registration');
$result=mysqli_query($conn,"select * from users where email='$email' and  password='$password'")
       or die('Failed to query database'.mysqli_error($conn));
$row=mysqli_fetch_array($result);	   
if ($row['email']==$email  &&	$row['password']==$password)
{
echo "<hr>Login succesful!!!!!! <br><br><hr> WELCOME TO OUR PAGE  ".$row['username']."<br>";
//header("location:index1.php");
$_SESSION['email']=$email;

echo "Proceed to our page<br>";
echo "<a href='index1.php'>Gap-translators</a><br>";
}
else{

echo "Failed to login!!<br><br>";
$_SESSION['message']="Incorrect email/password please enter valid log in details";
//header("location:index.php");
echo "GO BACK AND LOGIN AGAIN..<br>";
echo "<a href='login.php'>Login here..</a><br><br>";

echo "For new users, Please create your account here..<br>";
echo "<a href='index.php'>Register account here</a>";
$_SESSION['message']="create your account here";

}	
?>
