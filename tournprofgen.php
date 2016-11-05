


<script>
	$(document).ready(function() {
	$("a").click(function(){
		$name = (this).id;
		alert ($name);
		$.post("getdetails.php", {
			'name':$name
		}).done(function(data){
			alert("Posted data: " +data); 
			
		});
	});
	});

</script>






<?php
	
	require "connection.php";
	
	$sess=$_SESSION['current_tourn_id'];
	$result1 = mysqli_query($bd, "SELECT * 
						FROM tournaments
						WHERE tourn_id=$sess") or die(mysqli_error($bd));
	
	while($row = mysqli_fetch_assoc($result1)){
	$row['tourn_id'];
	echo '<div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Name</h3>
                        <p>'.$row['tourn_name'].'
                            <br>'.$row['tourn_sport'].'</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Venue</h3>
                        <p>'.$row['tourn_venue'].'</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Dates</h3>
                        <ul class="list-inline">
                            <li>
                                <a>'.$row['tourn_dates'].'</a>
                            </li>                        
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3></h3>
                        <p></p>
                    </div>';
	$result= mysqli_query($bd, "SELECT *
						FROM tournament_organized
						WHERE tourn_id =$sess") or die(mysqli_error($bd));
	
	
	/*$result = mysqli_query($bd, "SELECT * 
						FROM tournaments
						WHERE tourn_s);*/
	//$count = mysqli_num_rows($result);

	/*for($i=0;$i<$count;$i++){
		$tourn_id
	}*/

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result)) {
	$mem_name = $row1["mem_username"];
        echo '<div class="footer-col col-md-4">
                        <h3>Organiser</h3>
                        <p><a href="prof.html.php" onclick="before('.$mem_name.')">'.$mem_name.'</a></p>
                    </div><div class="footer-col col-md-4">
                        <h3>TEAMS PARTICIPATING</h3><ul style="list-style:none">';
	}
	}
	$result2= mysqli_query($bd, "SELECT *
						FROM tournament_connect
						WHERE tourn_id =$sess") or die(mysqli_error($bd));

	if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {
		$mem_name = $row2["team_name"];
                     echo '
                        <li><a href="prof.html.php"  id="'.$mem_name.'" class="clickable">'.$mem_name.'</a></li>';
	}
	}
					echo '</ul></div><div class="footer-col col-md-4">
                        <h3>Maximum No Of Teams</h3>
                        <p>'.$row['tourn_not'].'</p>
                    </div>
                                    <div class="footer-col col-md-4" class="center">
                        <h3>Maximum Players</h3>
                        <p>'.$row['tourn_nop'].'</p>
                    </div>
					</div>';


    }
?>

