<?php
session_start();
?>
<html>
<head>
<?php include('header_content.php'); ?>
<link rel="stylesheet" href="formm.css">
<link href="carousel.css" rel="stylesheet">



</head>
<body style="background:url('rr.jpg')">

<?php
if(isset($_SESSION['SESS_FIRST_NAME']))
{
	include('header_logged_in.php');
}
else
{
	include('header_login.php');
}
?> 
	  <h1>CREATE A NEW TOURNAMENT</h1>
   
  <form name='new_tourn' action="newtourn.php" method="POST" enctype="multipart/form-data">
	    <h1>Should you have any questions, please do not hesitate to contact us :</h1>
	    
    <div class="contentform">
    	


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
			<select name="tournsport">
			  <option value=1>Football</option>
			  <option value=2>Cricket</option>
			  <option value=3>Basketball</option>
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
			
			<div class="form-group">
			<p>Upload image of your Tourney:</p>
			
			<input required name="userfile" type="file">

	<div class="leftcontact">

	
<button type="submit" class="bouton-contact">Send</button>
	
</form>	

  
</body>
</html>