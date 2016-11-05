<!DOCTYPE html>
<html lang="en">

<head>
 <?php
 session_start();

include('header_content.php');
?>
   <link href="carousel.css" rel="stylesheet">
</head>

<body>
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