<?php
	
	
	require "connection.php";
	
	
		$_SESSION['SESS_REQUIRED_NAME'] = $_POST['name'];
	$sess=$_SESSION['SESS_REQUIRED_NAME'];
	$result1 = mysqli_query($bd, "SELECT * 
						FROM member
						WHERE mem_user_name='$sess'") or die(mysqli_error($bd));
	
	while($row = mysqli_fetch_assoc($result1)){
		echo '<div class="info">
                    <div class="title"><h1>'.$row['mem_user_name'].'</h1>
                    </div>
                    <div class="desc"><h3>'.$row['mem_location'].'</h3></div>
                </div>
                
				<!--<div class="rating">
					<h1><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span></h1>
					</div>
					-->
					
					<table class="table1">
					  <tr>
											  
						<th><form action="cards_part.php">
							<input type="submit" value="Tournaments Played" style="height:70px; background-color:#FFA500"/>
						</form></th>
						
					 
						<th><form action="cards_org.php">
							<input type="submit" value="Tournaments Organized" style="height:70px; background-color:#FFA500"/>
						</form></th>
					  </tr>
					  <tr>
					  
	</table>'; }?>

    
