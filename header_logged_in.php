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
              <a class="navbar-brand" href="wt_home_4.html.php">Tourneys</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="wt_home_4.html.php">Home</a></li>
                <li><a href="abt.html">About</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sports <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="cards_cric.php">Cricket</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="cards_foot.php">Football</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="cards_bball.php">Basketball</a></li>
                
                </ul>
                </li>
</ul>				
<!--
<a href="wt_home_4.html.php" class="btn btn-default btn-flat" onclick="return theFunction();">Sign out</a>
          <script type="text/javascript">
            function theFunction () {
              // return true or false, depending on whether you want to allow the `href` property to follow through or not
              <?php
              //  unset($_SESSION['DONE']);
              ?>
              return true;
            }
          </script>-->
            
        

             
                <!--
                </div>-->

                <!---Right menu
                ============================= -->
                <div class="navbar-custom-menu">
                 <ul class="navbar-nav pull-right" style="list-style:none; margin-top:15px;padding-right:20px">

                  <!-- User Account Menu -->
            <li class="dropdown user user-menu" >
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="userimg-sm.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs" style="font-size:16px"> <?php echo($_SESSION['SESS_FIRST_NAME']);?></span>
              </a>
              <ul class="dropdown-menu" style="margin-top:15px">
                <!-- The user image in the menu -->
                <li class="user-header" >
                  <img src="userimg.jpg" class="img-circle" alt="User Image">


                  <p style="color:black;font-size:24px">
                    Welcome 
                  <?php echo($_SESSION['SESS_FIRST_NAME']);?>!</p>
                </li>

                <!-- Menu Body -->
				<form action="prof.html.php" style="margin: 0 auto; width:150px;">
					<input type="text" name="data" placeholder="Find Tourney Friends" style="text-align:center;margin-bottom:15px;">
					</form>
                <li class="user-body">
                  <div class="row">
				  
                    <div class="col-xs-2 text-center">
                     <!-- <a href="#">Followers</a>-->
                    </div>
					
                    <div class="col-xs-8 text-center">
					

                      <button type="button" class="btn btn-block btn-warning btn-flat" onclick="hey();"><h5>Create Tourney<h></button>
					  <script>
					  function hey()
					  {
						  window.open("formm.php");
					  }
					  </script>

                    </div>
                    <div class="col-xs-2 text-center">
                      <!--<a href="#">Friends</a>-->
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="prof.html.php" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>

                  </div>
                </li>

            
              </ul>
            
            <!---End of right header -->
          </div>

        </nav>

      </div>
    </div>
	<br>
	<br>
	<br>

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