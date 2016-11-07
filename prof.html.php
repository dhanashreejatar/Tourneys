<!DOCTYPE html>
<html>
<head>
<link href="prof.css" rel="stylesheet">
</head>
<body class="hey">
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">
		
                </div>
                
				<?php 
						session_start();
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
</div>

</div>
</body>
</html>