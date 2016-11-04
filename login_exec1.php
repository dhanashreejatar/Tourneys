<?php

session_start();

require_once('connection.php');
// define variables and set to empty values
$name=$password=" ";
$err=false;


	if (empty($_POST["name"])) {
     //$yearErr = "Year is required";
	 //$_SESSION['yearErr'] = $yearErr;
	 $err=true;
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["name"])) {
     //$nameErr = "Name is required";
	 //$_SESSION['nameErr'] = $nameErr;
	 $err=true;
   } else {
     $password = test_input($_POST["password"]);
     // check if name only contains letters and whitespace
     //if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     //  $nameErr = "Only letters and white space allowed"; 
     //}
   }
  
	function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
   
    if($err) {
		session_write_close();
		echo "Done";
		header("location: registerform.html.php");
		echo "Done";
		exit();
	}
	else{
	$qry="insert into member(mem_user_name,mem_password) values('$name','$password')";
	$result=mysqli_query($bd,$qry);
		if($result) {		
		header("location:wt_home_4.html.php");
		exit();
		}
	}

?>