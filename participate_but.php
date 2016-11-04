<?php

	require "connection.php";
		
		if(isset($_POST['tpart_id'])){
			$tpart_id=$_POST['tpart_id'];
		}

		$mem_id = $_SESSION['SESS_FIRST_NAME'];
		$tourn_id = (int)$tpart_id; //mock value- to be retrieved when inoutting data in cards
		mysqli_query($bd, "INSERT INTO tournament_connection
							VALUES($tourn_id, $mem_id)");
		
	


?>