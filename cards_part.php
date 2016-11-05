<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Football</title>

     <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="_all-skins.min.css">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- HEADER-->
<div class="navbar-wrapper" >
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#" style="">Tourneys</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sports <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Cricket</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Football</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Basketball</a></li>
          
                   
                  </ul>
                </li>
                </ul>
              
        

             
                

                <!---Right menu style="float:right; padding-right:30px; margin-right:20px;"
                =================================-->
                

     <ul class="nav navbar-nav " style="float:right; padding-right:30px; margin-right:10px;">
                
                
                <li>
                  <div style="margin:7px">
                  <button type = "button" class = "btn btn-warning btn-md" style="width:100px" data-toggle="modal" data-target="#mymod2" >Login</button>
                  </div>
                </li> 
                
               
                 <!-- Modal -->
              <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="mymod2" data-backdrop="false">
  <div class="modal-dialog" role="document" style="width:33%">
  <form name="login" action="login_exec.php" method="post">
          <?php
            if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
            echo '<ul class="err">';
            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
              echo '<li>',$msg,'</li>'; 
              }
            echo '</ul>';
            unset($_SESSION['ERRMSG_ARR']);
            }
            if( isset($_SESSION['DONE']))
            {
              echo $_SESSION['DONE'];
              
            }
          ?>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p class="featurette-heading text-center" id="gridSystemModalLabel" style="margin-top:10px; margin-left">Welcome back!</p>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
       <input type="text" class="form-control" name="username" placeholder="User Name" required="" autofocus="" style="margin-top:10px; margin-bottom:10px" />
       </div>
       <div class="col-sm-2"></div>
       </div>
       <div class="row">
       <div class="col-sm-2"></div>
       <div class="col-sm-8">
      <input type="password" class="form-control" name="password" placeholder="Password" required="" style="margin-bottom:10px; margin-top:5px" />      
        </div>
        <div class="col-sm-2"></div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-md" data-dismiss="modal" style="width:100px">Login</button>
        
      </div>
    </div><!-- /.modal-content -->

  
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 



                
                <li>
                <div style="margin:7px">
                  <button type = "button" class = "btn btn-warning btn-md" style="width:100px">Register</button>
                  </div>
                </li> 
                

              </ul>
           
           
          </div>

        </nav>

      </div>
    </div>





<!-- HEADER END-->



<section id="portfolio" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading" style="font-size:64px">Football</h1>
                    <h3 class="section-subheading text-muted">Upcoming Tourneys.</h3>
                </div>
            </div>

            <?php include ('eventsgridP.php') ?>
           
                           </div>
                           </a>
        </div>
    </section>



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

     <script>
                        $(document).ready(function(){
        $('.part-btn').click(function(){
            var clickBtnValue = $(this).val();
            var ajaxurl = 'participate_but.php',
            data =  {'action': clickBtnValue};
            $.post(ajaxurl, data, function (response) {
                // Response div goes here.
                alert("Registered as participant!");
            });
        });

    }) </script>


    <script>
       /* $(document).ready(function(){
            $(function(){
                <?php
                   
                    ?>
                    alert("Loading...");
            });
        })*/
    </script>


</body>
</html>