<?php include('header_content.php');?>
<?php
     
    require "connection.php";
	
	$sess=$_GET['data'];
    $result = mysqli_query($bd, "SELECT * 
                        FROM tournament_connect
                        WHERE tourn_id=$sess");
    //$count = mysqli_num_rows($result);

    /*for($i=0;$i<$count;$i++){
        $tourn_id
    }*/

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo  "<body style='background:url(\"rr.jpg\")'><div style='margin:auto;width:50%;padding-top:70px;'><h1>Choose Winner</h1>";
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["tourn_id"];

       echo '<br><form action="winner1.php">
						<input type="hidden" name="data" value='.$row['team_name'].'>
						<input type="hidden" name="data2" value='.$sess.'>
                        <button type="submit" class="btn btn-warning btn-md" style="float:left;margin-left:20px;width:150px;">'.$row['team_name'].'</button>
                        </form><br>';
		


    }
	echo '</div></body>';
}

?>
