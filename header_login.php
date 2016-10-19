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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Cricket</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Football</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Basketball</a></li>
          
                   
                  </ul>
                </li>
                </ul>
				<ul class="nav_navbar-nav " >
                
                
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
                  <button onclick="window.location.href='/Tourneys/registerform.html.php'" type = "button" class = "btn btn-warning btn-md" style="width:100px">Register</button>
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
               




    