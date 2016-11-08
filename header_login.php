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
              <a class="navbar-brand" href="wt_home_4.html.php" >Tourneys</a>
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
				<ul class="nav navbar-nav pull-right " style="list-style:none;" >
                
                
                <li>
                  <div style="margin:7px">
                  <button type = "button" class = "btn btn-warning btn-md" style="width:100px" data-toggle="modal" data-target="#mymod2" >Login</button>
                  </div>
                </li> 
                
               
                 <!-- Modal -->
              <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="mymod2" data-backdrop="false">
  <div class="modal-dialog" role="document" style="width:33%">
  
    <div class="modal-content">
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
				echo "yoyo";
            }
			
          ?>
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
        <input id="button" name="submit" value="Login" type="submit" class="btn btn-warning btn-md"  style="width:100px" />
        
      </div>
	  </form>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 



                
                <li>
                <div style="margin:7px">
                  <button onclick="window.location.href='/Tourneys/registerform.php'" type = "button" class = "btn btn-warning btn-md" style="width:100px">Register</button>
                  </div>
                </li> 
                

              </ul>
           
           
          </div>

        </nav>

      </div>
    </div>
    </div>
    <br>
    <br>
    <br>
              
        

             
                <!--
                </div>-->

                <!---Right menu
                <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">-->
               

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


    