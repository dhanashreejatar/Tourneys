<?php
	
	
	require "connection.php";

	$result = mysqli_query($bd, "SELECT * 
						FROM tournaments
						WHERE tourn_sport=1");
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
                    <a href="#mymod2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="ftb.jpg" class="img-responsive" alt="">

                    </a>
                    <div class="portfolio-caption">
                        
                        <h3 style="text-align:center; padding-bottom:10px;">'.$row["tourn_name"].'</h3>

                        
                        <button type="button" class="btn btn-warning btn-md" style="float:left;margin-left:20px">View More</button>
                        <form name="participate" action="participate_but.php" method="POST">
                         <input type="hidden" name="tpart_id" id="tpart_id" value='.$id.' > </input>
                        <button type="submit" id="'.$id.' " class="btn btn-warning btn-md part-btn" style="float:right;margin-right:20px">Participate</button>
                       
                        </form>                        
                    </div>
                </div>';


    }
}
?>