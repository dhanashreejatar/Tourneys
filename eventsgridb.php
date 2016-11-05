
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
                        WHERE tourn_sport=3");
    //$count = mysqli_num_rows($result);

    /*for($i=0;$i<$count;$i++){
        $tourn_id
    }*/

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["tourn_id"];

        echo  
        '<div class="col-md-4 col-sm-6 portfolio-item" id="card_.'.$id.' " style = "margin-top:35px; margin-bottom:25px; " >
                    
                        
                        <img src="bball.jpg" class="img-responsive" alt="">

                    
                    <div class="portfolio-caption">
                        
                        <h3 style="text-align:center; padding-bottom:5px;">'.$row["tourn_name"].'</h3>
                        <h4><span style="float:left;margin-left:20px;padding-bottom:25px;">Deadline: '.$row["tourn_deadline"].'</span> <span style="float:right;margin-right:20px;padding-bottom:25px;">Locality: '.$row["tourn_locality"].'</span></h4>
                        
                        <button type="button" class="btn btn-warning btn-md" style="float:left;margin-left:20px">View More</button>
                        <form>
                         <input type="hidden" name="tpart_id" id="tpart_id" value='.$id.' > </input>
                        <button type="submit" id="'.$id.' " class="btn btn-warning btn-md part-btn" style="float:right;margin-right:20px" onclick ="beforeSubmit('.$id.');">Participate</button>
                       </form>
                                              
                    </div>
                    

                </div>';


    }
}

?>