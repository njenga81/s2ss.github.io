<html>
<head>
<title>contact-us</title>
<meta http-equiv="Kiswahili-translatios" content="text/html; charset=utf-8" />
<link href="GAPtranslators.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
if(!($_SESSION['email'])){
header("location:login.php");
}
?>
<div id="container">
  <div class="container">
   
    <div id="menu">
       <ul >
            <li><a href="index1.php">Home</a></li>
            <li ><a href="services.php">Services</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul></div> 
    </div>
    
	<div id="banner" >
    
    	<div id="banner_content">
    	<div id="banner_title_1">Subscribe to our newsletter.<br>Register your email,<br>
		         To recieve GAP-translators newsletter together with notifications for Gap-translators website and content updates:</div>
     <form action="alert.html"> 
<div id="formm">  
<label for="name" class="title">Name:</label>  
<input type="text" id="name" name="name" /> 
</div> 
<div class="formm">  
<label for="email" class="title">Email:</label>  
<input type="email" id="email" name="email" /> 
</div> 
<div class="formm">  
<span class="title">Gender:</span>  
<input type="radio" name="gender" id="male"    value="M" /> 
 <label for="male">Male</label>  
 <input type="radio" name="gender" id="female"    value="F" />  
 <label for="female">Female</label><br />
 </div> 
 <div>  
 <input type="submit" value="Register"    
 id="submit" > 
 <div class="rc_btn_01"><a href=login.php>Log in</a></div> <br>
  <div class="rc_btn_02"><a href=logout.php>Log out</a></div> <br>
 </div>
 </form>

      </div>
    </div> 
 
 <div id="bottom_panel">
    	<div id="bottom_panel_top"></div>
        <div id="bottom_panel_content">
	        <div class="bottom_panel_title_1"><tt>Contact us:</tt></div>
            
            <div class="bottom_content_box">
                <p>Grace Njenga  (MA Swahili studies)<br>	
				e-mail: <a href="mailto:gracenjenga76@gmail.com">gracenjenga76@gmail.com</a><br>
				Phone :<strong> +254 721482495</strong> <br><br>
			 <div class="logozone"> <a href="index1.php"><img src="images/logo.jpg" alt="" border="0" /></a> </div>
             <div class="cleaner">&nbsp;</div>
				Address : <br />
				<i>GAP-translators</i><br />
				P.o box 90-Nderu<br>
				Kenya<br />
				
			</div>
				<div class="cleaner_h30">&nbsp;</div>
				</p>
                <div class="cleaner_h10">&nbsp;</div>
            </div>
			<div id="footer">
        <big>&copy; 2017 <a href="index1.php"><strong>GAP translators.</strong></a> All rights reserved.</big>
   <br>Designed by: Njenga Charles <br>
  <a href="mailto:cnjenga81@gmail.com">cnjenga81@gmail.com</a></div>
			</div>   	
</body>
</html>
