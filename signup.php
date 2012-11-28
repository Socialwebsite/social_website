<!-- connect -->
<?php
	include("include/header.php");
?>


<div id = "signup_contect">
	<div id="signup_left">
    	<div id='coin-slider'>
            <a href="#" target="_blank">
                <img src='image/1.jpg' width='700px' height='600px' />
                <span>
                    Description for img01
                </span>
            </a>
          
            <a href="#">
                <img src='image/2.jpg' width="700px" height="600px">
                <span>
                    Description for imgN
                </span>
            </a>
        </div>
   </div>
   
    
     <div id = "signup_right">
    	<form acttion="signup.php" method="POST" id="sign_form" class="form">
        <h1>
        	SIGN UP
        </h1>
        	<p>
                <input type="text" placeholder="First name" id="signup_first_name" class="field" />
            </p>
            <p>
            	<input type="text" placeholder="Firstname@example.com" id="signup_email" class="field" />
            </p>
            <p>
            	<input type="password" placeholder="Password" id="signup_password" class="field" />
            </p>
              <p>
            	<input type="password" placeholder="Confirm Password" id="signup_password" class="field" />
            </p>
             <p>
            	<input type="submit" id="signup_submit" class="button" value="Sign up" />
            </p>
        <form>
    </div>
</div>


<?php
	include("include/footer.php");
?>