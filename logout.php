<html>
<title>logging out</title>
<?php
session_start();
session_destroy();
unset($_SESSION['email']);
$_SESSION['message']="You are now logged out";
header("location:login.php");
?>
</html>
