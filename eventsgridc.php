
<script>

      function beforeSubmit($id){
            //alert($id);
            var $name = 0; 
            
            
            $.post( "participate_but.php", { 
    'id':$id,
    'name':$name,
    
}).done(function( data ) {
    //alert('Alert'+data)
  // $(".portfolio-item").html('  <form id="form1" name="participate" action="participate_but.php" method="POST"><input type="hidden" name="tpart_id" id="tpart_id" value='+data+''  "></input></form>');
   //$("#form1").submit();
});
            
      }
    </script>

<?php
    
    
    require "connection.php";

    $result = mysqli_query($bd, "SELECT * 
                        FROM tournaments
                        WHERE tourn_sport=2");
    //$count = mysqli_num_rows($result);

    /*for($i=0;$i<$count;$i++){
        $tourn_id
    }*/

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["tourn_id"];

		$result2 = mysqli_query($bd, "SELECT * 
                        FROM tournament_win
                        WHERE tourn_id='$id'");
        echo  
        '<div class="col-md-4 col-sm-6 portfolio-item" id="card_.'.$id.' " style = "margin-top:35px; margin-bottom:25px;" >';
                    
                        if($row['imagee']!=NULL)
						{
                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['imagee'] ).'" style="width:350px;height:250px"/>';
						}
						else{
							echo '<img src="cricket.jpg" class="img-responsive" alt="">';
						}

                    
                    echo '<div class="portfolio-caption">
                        
                        <h3 style="text-align:center; padding-bottom:10px;">'.$row["tourn_name"].'</h3>
                        <h4><span style="float:left;margin-left:20px;padding-bottom:25px;">Deadline: '.$row["tourn_deadline"].'</span> <span style="float:right;margin-right:20px;padding-bottom:25px;">Locality: '.$row["tourn_locality"].'</span></h4>
                        <form action="tournpage.html.php">
						<input type="hidden" name="data" value='.$id.'>
                        <button type="submit" class="btn btn-warning btn-md" style="float:left;margin-left:20px">View More</button>
                        </form>';
		if(isset($_SESSION['SESS_FIRST_NAME']))
		{
			$varr=$_SESSION['SESS_FIRST_NAME'];
			
			$result3 = mysqli_query($bd, "SELECT * 
                        FROM tournament_connect
                        WHERE tourn_id='$id' && team_name='$varr'");
			$result4 = mysqli_query($bd, "SELECT * 
                        FROM tournament_connect
                        WHERE tourn_id='$id'");
						
				if (mysqli_num_rows($result2) < 1&&mysqli_num_rows($result3)<1&&$row["tourn_not"]>mysqli_num_rows($result4)) {
						
						echo '<form>
                         <input type="hidden" name="tpart_id" id="tpart_id" value='.$id.' > </input>
                        <button type="submit" id="'.$id.' " class="btn btn-warning btn-md part-btn" style="float:right;margin-right:20px" onclick ="beforeSubmit('.$id.');">Participate</button>
                       </form>';
                                              
                    
	
	
				}
				
				else if(mysqli_num_rows($result2) > 0)
				{
						echo '<form>
                         <input type="hidden" name="tpart_id" id="tpart_id" value='.$id.' > </input>
                        <button type="submit" id="'.$id.' " class="btn btn-warning btn-md part-btn" style="float:right;margin-right:20px" disabled>Ended</button>
                       </form>';
				}
				
				else if(mysqli_num_rows($result3) > 0)
				{
						echo '<form>
                         <input type="hidden" name="tpart_id" id="tpart_id" value='.$id.' > </input>
                        <button type="submit" id="'.$id.' " class="btn btn-warning btn-md part-btn" style="float:right;margin-right:20px" disabled>Participated</button>
                       </form>';
				}
				else if($row["tourn_not"]==mysqli_num_rows($result4))
				{
						echo '<form>
                         <input type="hidden" name="tpart_id" id="tpart_id" value='.$id.' > </input>
                        <button type="submit" id="'.$id.' " class="btn btn-warning btn-md part-btn" style="float:right;margin-right:20px" disabled>Tourney Full</button>
                       </form>';
				}
		}
	echo '</div>
                    

                </div>';


    
	}
	}

?>