<?php
	
	require "connection.php";
	
	$sess=$_SESSION['SESS_REQUIRED_NAME'];
	$result1 = mysqli_query($bd, "SELECT * 
						FROM tournament_win
						WHERE team_name='$sess'") or die(mysqli_error($bd));
	
	while($row = mysqli_fetch_assoc($result1)){
	$row1=$row['tourn_id'];
	$result= mysqli_query($bd, "SELECT *
						FROM tournaments
						WHERE tourn_id =$row1") or die(mysqli_error($bd));
	
	
	/*$result = mysqli_query($bd, "SELECT * 
						FROM tournaments
						WHERE tourn_s);*/
	//$count = mysqli_num_rows($result);

	/*for($i=0;$i<$count;$i++){
		$tourn_id
	}*/

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$id = $row["tourn_id"];

        echo  
        '<div class="col-md-4 col-sm-6 portfolio-item" id="card_.'.$id.' " style = "margin-top:35px; margin-bottom:25px;" >
                    <a href="#mymod2" class="portfolio-link" data-toggle="modal">';
                        
						if($row['imagee']!=NULL)
						{
                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['imagee'] ).'" style="width:350px;height:250px"/>';
						}
						else if($row["tourn_sport"]==1){
							echo '<img src="ftb.jpg" class="img-responsive" alt="" style="width:350px;height:250px">';
						}
						else if($row["tourn_sport"]==2){
							echo '<img src="cricket.jpg" class="img-responsive" alt="" style="width:350px;height:250px">';
						}
						else{
							echo '<img src="bball.jpg" class="img-responsive" alt="" style="width:350px;height:250px">';
						}

                    echo '</a>
                    <div class="portfolio-caption">
                        
                        <h3 style="text-align:center; padding-bottom:10px;">'.$row["tourn_name"].'</h3>

                        <form action="tournpage.html.php">
						<input type="hidden" name="data" value='.$id.'>
                        <button type="submit" class="btn btn-warning btn-md" style="float:left;margin-left:20px">View More</button>
                        </form>
						
						<form name="participate" action="draws.html.php">
                         <input type="hidden" name="data" value='.$id.' > </input>
                        <button type="submit" id="'.$id.' " class="btn btn-warning btn-md part-btn" style="float:right;margin-right:20px">View Draws</button>
                       
                        </form>                        
                    </div>
                </div>';


    }
}
	}
?>