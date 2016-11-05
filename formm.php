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
			<select name="tourn_sport" form="new_tourn" id="input7">
			  <option value="football">Football</option>
			  <option value="cricket">Cricket</option>
			  <option value="basketball">Basketball</option>
			</select>
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