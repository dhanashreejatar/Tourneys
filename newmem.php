<?php

session_start();

require_once('connection.php');
// define variables and set to empty values
$name=$password=" ";



     $name = test_input($_POST["mem_user_name"]);
   
   
   
     $mem_password = test_input($_POST["mem_password"]);
     
   
 
     $mem_email = test_input($_POST["mem_email"]);
   
   
     $mem_capname = test_input($_POST["mem_capname"]);
   
     $mem_phone = test_input($_POST["mem_phone"]);
   
     $mem_location= test_input($_POST["mem_location"]);
   
   
  
    function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
   
    if($err) {
        session_write_close();
        echo "Done";
        header("location: registerform.php");
        echo "Done";
        exit();
    }
    else{
    
    $result=mysqli_query($bd,"INSERT INTO member(mem_user_name,mem_password,mem_capname,mem_email,mem_phone,mem_location) 
    VALUES('$name','$mem_password','$mem_capname','$mem_email',$mem_phone,'$mem_location')")  or die(mysqli_error($bd));
        if($result) {        
        header("location:wt_home_4.html.php");
        exit();
        }
    }

?>