<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<?php include('header_content.php'); ?>
<link href="prof.css" rel="stylesheet">
 <link href="carousel.css" rel="stylesheet">
</head>
<body class="hey">
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
<div class="container" style="width:70%;margin-top:50px">
	<div class="row">
		<div class="col-lg-1">
		</div> <!--col-lg-3 col-sm-6-->
		<div class="col-lg-10">
            <div class="card hovercard">
                <div class="cardheader">
		
                </div>
                
				<?php 
						
						if(isset($_GET['data']))
						{
							$_SESSION['SESS_REQUIRED_NAME']=$_GET['data'];
						}
						else
						{
							$_SESSION['SESS_REQUIRED_NAME']=$_SESSION['SESS_FIRST_NAME'];
						}
						include 'getdetails.php';
						?>
			
        </div>
		
	</div>
	<div class="col-lg-1">
	</div>
</div>

</div>
</body>
</html>