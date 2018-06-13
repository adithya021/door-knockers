
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

      </head>

  <body>

  	<div class="uk-section uk-container">
  		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
			<form class="uk-form-stacked js-register" action="conn.php" method="POST">
				
				 <center><h2>Register</h2>
                               <div class="uk-margin">
			        
			        <div class="uk-form-controls">
			FullName:<input class="uk-input" id="form-stacked-text" name="fname" type="FullName" required='required' placeholder="Enter name">
			        </div>
			    </div><br>
        
                                <div class="uk-margin">
			
			        <div class="uk-form-controls">
			UserName:<input class="uk-input" id="form-stacked-text" name="uname" type="username" required='required' placeholder="Enter name">
			        </div>
			    </div><br>

			    <div class="uk-margin">
			        
			        <div class="uk-form-controls">
			Email:<input class="uk-input" id="form-stacked-text" name="email" type="email" required='required' placeholder="email@email.com">
			        </div>
			    </div><br>

			   <div class="uk-margin">
			
			    <div class="uk-form-controls">
			Password:<input class="uk-input" id="form-stacked-text" name="psw" type="password" required='required' placeholder="Your password">
			        </div>
			    </div><br>


                           <div class="uk-margin">
		
			    <div class="uk-form-controls">
		        Mobile:<input class="uk-input" id="form-stacked-text" name="mobile" type="mobile" required='required' placeholder="mobile">
			        </div>
			    </div><br>

			    <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">Register</button>
			    </div></center>

			</form>
  		</div>
  	</div>

  	 
  </body>
</html>



<?php
$a=$_POST["fname"];
$b=$_POST["uname"];
$c=$_POST["email"];
$d=$_POST["psw"];
$e=$_POST["mobile"];
echo $a;
echo $b;
echo $c;
echo $d;
echo $e;
?>
