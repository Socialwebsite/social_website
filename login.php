<!-- connect  -->
<?php

	  if(isset($_POST['login_button']))  
	{
		$username_p = $_POST['u_name'];
		$password_p = $_POST['p_word'];
		
		echo"$username_p  $password_p";
	}

	if(isset($_POST['login_button'])) //to check if the click the login button
	{
	  $username_p = $_POST['u_name'];
	  $password_p = $_POST['p_word'];
	  
	  echo"$username_p $password_p";
	  
	}
	  
this is test
?>


<!DOCTYPE html>
<html lang='en'>
<head>
	<title> Log in Page </title>
	<link rel='stylesheet' type='text/css' href='css/main.css' />
	
</head>
<body>

<?php
	include("include/header.php");
?>
<div id='content'>
 <div id='img'>
<<<<<<< HEAD
     <img src="image/image.jpg" width="500" height="450"> 
=======
     <img src="image.jpg" width="500" height="450"> 
>>>>>>> try
 </div>
	<div id ='login'>
	<br/><br/>
		<form id ='login_form' action ='login.php' method = 'POST'>
		
		<div id ='username'>
		
<<<<<<< HEAD
			<input type ="text" placeholder ='Username' id='username' class='field'  name='u_name' />
=======
			<input type ="text" placeholder ='Username' id='username' class='field' name'u_name' />
>>>>>>> try
		    <br/>
		</div>
		
		<div id ='Password'>
		
<<<<<<< HEAD
		   <input type ="password" placeholder ='Password' id='Password' class='field' name='p_word' />
=======
		   <input type ="password" placeholder ='Password' id='Password' class='field' name'p_word' />
>>>>>>> try
		   <br/>
		 </div>
		
		<div id ='login_submit'>
		
<<<<<<< HEAD
		<input type ="submit"  id='login_submit' class='button' name='login_button' value="login" />
=======
		<input type ="submit"  id='login_submit' class='button' value="login" name='login_button' />
>>>>>>> try
		<input type ="checkbox"  id='login_remember' class='checkbox' value="yes" />
		remember me
		<br/>
		<a href="#">Forgot your password? </a>
		</form>
      </div>	
	</div>              <!-- Login -->
   </div>               <!-- Content -->
</body>
</html>