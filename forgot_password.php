<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
$userid = $_SESSION['email'];
$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang='en'>
<head>
	<title> Member System -Forgot Password </title>
</head>
<body>
<?php
		if(!$username && !$userid)       //user already logged in
		{
		   if($_POST['resetbtn']){
		   
		   }
		   else "<form action='./forgot_password.php'>
		   <table>
               <tr>          //table row
			        <td>Username:</td>
					<td><input type='text' name='user' /></td>
			   </tr>	
			   <tr>
					<td>Email:</td>
					<td><input type='text' name='email' /></td>
			   </tr>
			   <tr>
					<td></td>
					<td><input type='submit' name='resetbtn' value='Reset Password' /></td>
			   </tr>
			   
			    
			       
		   </table>
		   </form>";
		   
		}
		else
		  echo "Please logout to view this page";   

?>
		</body>
     </html>