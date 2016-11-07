
<?php
  //Start session
  session_start();  
  //Unset the variables stored in session
  
					

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

  
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <title>Tourneys</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE.min.css">
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="_all-skins.min.css">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>








  <body style="background:#d8d8d8">

<!-- NAVBAR   TO DO: MAKE FLOAT RIGHT AND SHIFT NAVBAR UP
================================================== -->
<?php
if(isset($_SESSION['SESS_FIRST_NAME']))
{
	include('header_logged_in.php');
}
else
{
	include('header_login.php');
}
?>           

             
                

                <!---Right menu style="float:right; padding-right:30px; margin-right:20px;"
                =================================-->
                

		
     
    


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="banner1.jpg" alt="First slide">
          <div class="container">
            
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="banner2.jpg" alt="Second slide">
          <div class="container">
            
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="banner3.jpg" alt="Third slide">
          <div class="container">
           
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

     
      <!-- START THE FEATURETTES -->

      <!---Tagline-->

      <div class="row featurette">
        
          <div class="col-md-12">
          <h2 class="featurette-heading">India's one of a kind sports event planner and catalogue. <span class="text-muted">Launching in Mumbai.</span></h2>
        </div>
        </div>


      <hr class="featurette-divider">


      <!-- Sports Portfolio-->

       <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="cards_foot.php" class="portfolio-link">
                        
                        <img src="ftb.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h3>Football</h3>
                        <p class="text-muted">Upcoming Tournaments</p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="cards_cric.php" class="portfolio-link">
                        
                        <img src="cricket.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h3>Cricket</h3>
                        <p class="text-muted">Upcoming Tournaments</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="cards_bball.php" class="portfolio-link">
                        
                        <img src="bball.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h3>Basketball</h3>
                        <p class="text-muted">Upcoming Tournaments</p>
                    </div>
                </div>
        </div>
		

        <hr class="featurette-divider" style="margin-bottom:0px">

       <!--Register--> 

      <div class="row featurette">
        <div class="col-md-7" >
          <h2 class="featurette-heading">Calling all sports enthusiasts everywhere. <span class="text-muted"></span></h2>
          <p class="lead">We at Tourneys provide a platform to connect you with sports events happening in the city for you to participate in. So form your team, register on the site and pick a sport, any sport!</p>
        </div>
        <div class="col-md-5" >
        <!--style="padding-left:20px; border-left: 1px solid #ccc;"-->
        <br><br>
          <h3 class="featurette-heading"> Let's get started </h3>
          <br>
          <div class="col-md-3"></div>
          <div class="col-md-6">
          <button onclick="window.location.href='/Tourneys/registerform.php'" type="button" class="btn btn-warning btn-lg btn-block btn-txt-lg">Register</button>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery.min.js"><\/script>')</script>
    <script src="bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
    $('.dropdown-toggle').dropdown()
});
    </script>
  </body>
</html>
