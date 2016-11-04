<html>
<head>

<link rel="stylesheet" href="form.css">

</head>
<body>
	  <h1>CREATE A NEW TOURNAMENT</h1>
   
  <form name='new_tourn' action="newtourn.php" method="POST">
	    <h1>Should you have any questions, please do not hesitate to contact us :</h1>
	    
    <div class="contentform">
    	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


    	<div class="leftcontact">
			      
            <div class="form-group">
            <p>Name of the Tournament :<span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
				<input type="text" name="tourn_name" id="tourn_name" data-rule="required"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Sport: <span>*</span></p>
			<div class="row">
			<div class="col-md-4" style="margin-right:150px">
			<input type="radio" name="sport" id="football" value="football"  />
			<label for="football">Football</label>
			</div>
			<div class="col-md-4" style="margin-right:150px">
			<input type="radio" name="sport" id="cricket" value="cricket" />
			<label for="cricket">Cricket</label>
			</div>
			<div class="col-md-4" style="margin-right:150px">	
			<input type="radio" name="sport" id="basketball" value="basketball" />
			<label for="basketball">Basketball</label>
			</div>
			</div>
			</div>

			<div class="form-group">
			<p>Venue :<span>*</span></p>	
			<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="text" name="tourn_venue" id="tourn_venue" data-rule="required"/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Locality :<span>*</span></p>	
			<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="text" name="tourn_locality" id="tourn_locality" data-rule="required"/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Dates :<span>*</span></p>
			<span class="icon-case"><i class="fa fa-home"></i></span>
				<input type="text" name="tourn_date_1" id="tourn_date_1" data-rule="required"/>
                <div class="validation"></div>
            
			</div>

			

			<div class="form-group">
			<p>Registration Fee :<span>*</span></p>
			<label for="yes">
				<input type="radio"  name="reg" id="yes" data-rule="required"/>
				YES
			</label>	
			<label for="no">
				<input type="radio"  name="reg" id="no" data-rule="required"/>
            	NO   
            </label>
			</div>

			<div class="form-group">
			<p>Registration Fee:</p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="tourn_fee" id="tourn_fee" data-rule="required"/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Deadline :<span>*</span></p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="tourn_deadline" id="tourn_deadline" data-rule="required"/>
                <div class="validation"></div>
			</div>	
			
			<div class="form-group">
			<p>Maximum number of teams :<span>*</span></p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="tourn_not" id="tourn_not" data-rule="required"/>
                <div class="validation"></div>
			</div>	
	
			<div class="form-group">
			<p>Maximum number of players :<span>*</span></p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="tourn_nop" id="tourn_nop" data-rule="required"/>
                <div class="validation"></div>
			</div>	

	</div>

	
<button type="submit" class="bouton-contact">Send</button>
	
</form>	

  
</body>
</html>