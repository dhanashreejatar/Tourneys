<?php
session_start();
?>
<!DOCTYPE HTML> 
<html>
<head>

<link rel="stylesheet" href="form.css">

</head>
<body>
	  <h1>SIGN-UP ON TOURNEYS.COM!</h1>
   

	    <h1>Should you have any questions, please do not hesitate to contact us :</h1>
	    
			<div class="contentform">
				<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>

			<form action="login_exec1.php" method="post">   
					<div class="leftcontact">
							<div class="form-group">
								<p>Name:<span>*</span></p>
								<span class="icon-case"><i class="fa fa-user"></i></span>
								<input type="text" name="name" id="username"/>
								<div class="validation"></div>
							</div>

							<div class="form-group">
							<p>Password :<span>*</span></p>	
							<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
								<input type="text" name="password" id="pass"/>
								
							</div>		
					</div>
					<button type="submit" class="bouton-contact">Send</button>
			</form>
</body>
</html>