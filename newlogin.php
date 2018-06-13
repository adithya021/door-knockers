
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
			<form class="uk-form-stacked js-login" action="conn1.php" method="POST">
				
				<center><h2>Login</h2>

			    <div class="uk-margin">
			        
			        <div class="uk-form-controls">
			        Email:    <input class="uk-input" id="form-stacked-text" name="email" type="email" required='required' placeholder="email@email.com">
			        </div>
			    </div>

			    <div class="uk-margin">
			        
			        <div class="uk-form-controls">
			        Password:    <input class="uk-input" id="form-stacked-text" name="psw" type="password" required='required' placeholder="Your Password">
			        </div>
			    </div>

			    <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">Login</button>
			    </div>

			</center></form>
  		</div>
  	</div>

  	 
  </body>
</html>




<?php
$a=$_POST["email"];
$b=$_POST["psw"];
echo $a;
echo $b;
?>
