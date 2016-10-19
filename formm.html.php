<?php
	session_start();
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: registerform.html.php");
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="form.css">

</head>
<body>
	  <h1>CREATE A NEW TOURNAMENT</h1>
   
  <form>
	    <h1>Should you have any questions, please do not hesitate to contact us :</h1>
	    
    <div class="contentform">
    	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


    	<div class="leftcontact">
			      
            <div class="form-group">
            <p>Name of the Tournament :<span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
				<input type="text" name="prenom" id="prenom" data-rule="required"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Venue :<span>*</span></p>	
			<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" id="email" data-rule="email"/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Dates :<span>*</span></p>
			<span class="icon-case"><i class="fa fa-home"></i></span>
				<input type="text" name="society" id="society" data-rule="required"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Registration Fee :<span>*</span></p>
			<label for="yes">
				<input type="radio"  name="adresse" id="yes" data-rule="required"/>
				YES
			</label>	
			<label for="no">
				<input type="radio"  name="adresse" id="no" data-rule="required"/>
            	NO   
            </label>
			</div>

			<div class="form-group">
			<p>Registration Fee:</p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="postal" id="postal" data-rule="required"/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Deadline :<span>*</span></p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="postal" id="postal" data-rule="required"/>
                <div class="validation"></div>
			</div>	
			
			<div class="form-group">
			<p>Maximum number of teams :<span>*</span></p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="postal" id="postal" data-rule="required"/>
                <div class="validation"></div>
			</div>	
	
			<div class="form-group">
			<p>Maximum number of players :<span>*</span></p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="postal" id="postal" data-rule="required"/>
                <div class="validation"></div>
			</div>	

	</div>

	
<button type="submit" class="bouton-contact">Send</button>
	
</form>	

  
</body>
</html>