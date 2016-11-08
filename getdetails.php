<?php
	
	require "connection.php";

	$sess=$_SESSION['SESS_REQUIRED_NAME'];
	$result1 = mysqli_query($bd, "SELECT * 
						FROM member
						WHERE mem_user_name='$sess'") or die(mysqli_error($bd));
	if(mysqli_num_rows($result1) > 0)
	{
	while($row = mysqli_fetch_assoc($result1)){
		echo '<div class="avatar">';
					if($row['mem_image']!=NULL)
						{
							echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['mem_image'] ).'"/>';
						}
						else{
							echo '<img alt="" src="pr.png">';
						}
                echo '</div>';
		echo '<div class="info">
                    <div class="title"><h1>'.$row['mem_user_name'].'</h1>
                    </div>
                    <div class="desc"><h3>'.$row['mem_location'].'</h3></div>
                </div>
                
				<!--<div class="rating">
					<h1><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span></h1>
					</div>
					-->
					
					<table class="table1" style="margin-left:5%">

					<div class="text-center">	
					  <tr >
											  
						<th><form action="cards_part.php">
							<input type="submit" value="Tournaments Played" class = "btn btn-group-lg" style="height:70px; background-color:#FFA500"/>
						</form></th>

						
						<th><form action="cards_won.php">
							<input type="submit" value="Tournaments Won" class = "btn btn-group-lg" style="height:70px; background-color:#FFA500"/>
						</form></th>
					 
						<th><form action="cards_org.php">
							<input type="submit" value="Tournaments Organized" class = "btn btn-group-lg" style="height:70px; background-color:#FFA500"/>
						</form></th>
					  </tr>
					  </div>
					  
	</table>'; }
	}
	else
	{
		header("location:wt_home_4.html.php");
	}
	?>

    
