<!DOCTYPE html>
<html>
<head>
<link href="prof.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="http://3.bp.blogspot.com/-G5ViranuRyI/U7ksmcAswMI/AAAAAAAAEFQ/sfr9gEnFIVU/s1600/ts3_seasons_render_soccer_player.png">
                </div>
                <div class="info">
                    <div class="title">
                        <?php 
						session_start();
						echo '<h1>'.$_SESSION['SESS_FIRST_NAME'].'</h1>';
						?>
                    </div>
                    <div class="desc"><h3><?php echo $_SESSION['SESS_LOCATION'];?></h3></div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
					href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
				<!--<div class="rating">
					<h1><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span></h1>
					</div>
					-->
					
					<span class="starRating">
					  <input id="rating5" type="radio" name="rating" value="5">
					  <label for="rating5">5</label>
					  <input id="rating4" type="radio" name="rating" value="4">
					  <label for="rating4">4</label>
					  <input id="rating3" type="radio" name="rating" value="3">
					  <label for="rating3">3</label>
					  <input id="rating2" type="radio" name="rating" value="2">
					  <label for="rating2">2</label>
					  <input id="rating1" type="radio" name="rating" value="1">
					  <label for="rating1">1</label>
					</span>
					<table class="table1">
					  <tr>
											  
						<th><form action="cards_part.php">
							<input type="submit" class="btn" value="Tournaments Played" style="height:70px; background-color:#FFA500"/>
						</form></th>
						
					 
						<th><form action="cards_org.php">
							<input type="submit" class="btn btn-warning btn-md" value="Tournaments Organized" style="height:70px; background-color:#FFA500"/>
						</form></th>
					  </tr>
					  <tr>
					  
					</table>
					
			</div>

			
        </div>
		
	</div>
</div>

</div>
</div>
</body>
</html>