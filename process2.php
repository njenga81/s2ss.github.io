<html>
<link href="GAPtranslators.css" rel="stylesheet" type="text/css" />
 <div class="logozone"> <a href="login.php"><img src="images/logo.jpg" alt="" border="0" /></a> </div>
 <br /><br />
<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;}
$username=test_input($_POST['username']);
$email=test_input($_POST['email']);
$password=test_input($_POST['password']);
$fname=test_input($_POST['fname']);
$lname=test_input($_POST['lname']);
$password=md5($password);
//$hash=password_hash($password, algo:PASSWORD_BCRYPT);

if(!empty($fname)||!empty($lname)||!empty($email)||!empty($username)||!empty($password)){

$host="localhost";
$dbuser="root";
$dbpass="vertrigo";
$dbname="registration";

$conn=new mysqli($host,$dbuser,$dbpass,$dbname);

if(mysqli_connect_errno()){
die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
}else {
    $SELECT="SELECT email From users where email=? limit 1";
	$INSERT="INSERT Into users (username,email,password,fname,lname)values(?,?,?,?,?)";
    
	$stmt=$conn->prepare($SELECT);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum=$stmt->num_rows;
	
	if($rnum==0){
	$stmt->close();
	$stmt= $conn->prepare($INSERT);
	$stmt->bind_param("sssss",$username,$email,$password,$fname,$lname);
	$stmt->execute();
	echo '<script>alert("ACCOUNT SUCCESFULLY REGISTERED")</script>';
	echo  '<script>alert("welcome to gap translators")</script>';
	header('refresh:4; url=contactus.php');
	}else{
	echo '<script>alert("someone already used email..")</script>';
	echo "Register using a unique email<br>";
	echo "<a href='index.php' id='but'>Register account here</a>";
	header('refresh:5; url=index.php');
	}
	$stmt->close();
	$conn->close();

}

}
else{
echo  '<script>alert("All fields required")</script>';
header('refresh:5; url=index.php');
die();
}
?>