<?php

	//echo $_POST['id'];
		$tourn_id = (int)$_POST['id'];
	
	session_start();
	require "connection.php";
		
		/*if(isset($_POST['tpart_id'])){
			$tpart_id=$_POST['tpart_id'];
			echo $tpart_id;
		}*/

		$mem_name = $_SESSION['SESS_FIRST_NAME'];
		//$mem_name = "hello";
		//echo $_SESSION['SESS_TOURN_ID'];
		//$tourn_id = (int)$_SESSION['SESS_TOURN_ID'];
		

		echo $mem_name. $tourn_id; //mock value- to be retrieved when inoutting data in cards
		mysqli_query($bd, "INSERT INTO tournament_connect
							VALUES('$tourn_id', '$mem_name')") or die(mysqli_error($bd));
		mysqli_query($bd, "DELETE FROM `tournament_connect` 
							WHERE tourn_id='0'") or die(mysqli_error($bd));
		echo $mem_name. $tourn_id;
	


?>
<script type="text/javascript">alert("Reached");</script>