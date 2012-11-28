<!-- CONNECT AND HEAdER  -->
<?php
	include("include/header.php");
?>



<!-- USER HIT LOGIN BUTTON -->
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
	  
?>





<!-- LOGIN PAGE -->
<div id='login_outer'>
 <div id='login_left'>
     <img src="image/image.jpg" width="500" height="450"> 
 </div>
 
 
	<div id ='login_right'>
		<form id ='login_form' class='form' action ='login.php' method = 'POST'>
            <div id ='username'>
                <p>
                    <input type ="text" placeholder ='Username' id='username' class='field'  name='u_name' />
                </p>
            </div>
		
		<div id ='Password'>
			<p>
            	<input type ="password" placeholder ='Password' id='Password' class='field' name'p_word' />
		   </p>
		</div>
		
		<div id ='login_submit'>
			<p>
			<input type ="submit"  id='login_submit' class='button' value="login" name='login_button' />

			<input type ="checkbox"  id='login_remember' class='checkbox' value="yes" />
			remember me
           </p>
			<a href="#">Forgot your password? </a>
		</form>
      </div>	
	</div>              <!-- Login -->
   </div>               <!-- Content -->
   
   
   
   
   
<!-- FOOTER  -->
<?php
	include("include/footer.php");
?>