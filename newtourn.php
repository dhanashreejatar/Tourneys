<?php
	session_start();

 // This function will run within each post array including multi-dimensional arrays 
function ExtendedAddslash(&$params)
{ 
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
        }
}

     // Initialize ExtendedAddslash() function for every $_POST variable
    ExtendedAddslash($_POST);  

    $name = $_POST['tourn_name'];
    $venue = $_POST['tourn_venue'];
	$sport = (int)$_POST['tournsport'];
    $locality = $_POST['tourn_locality'];
    $dates = $_POST['tourn_date_1'];
    //$sport= (that if condidtion)
    //$reg_yes_no =   ~~For radio button~~
    //$reg_fee = $_POST['tourn_fee'];
    $deadline = $_POST['tourn_deadline'];
    $maxteams = $_POST['tourn_not'];
    $maxplayers = $_POST['tourn_nop'];

    require "connection.php";

	mysqli_query($bd,"INSERT INTO tournaments(tourn_name,tourn_sport,tourn_venue,tourn_locality,tourn_dates,tourn_deadline,tourn_not,tourn_nop)
					VALUES('$name',$sport,'$venue','$locality','$dates','$deadline',$maxteams,$maxplayers)")
	or die(mysqli_error($bd));
	$id=mysqli_insert_id($bd);
	$sess=$_SESSION['SESS_FIRST_NAME'];
	$result = mysqli_query($bd,"INSERT INTO tournament_organized(tourn_id,mem_username)
					VALUES($id,'$sess')")
	or die(mysqli_error($bd));
    if($result) {        
        header("location:wt_home_4.html.php");
        exit();
        }
?>	


