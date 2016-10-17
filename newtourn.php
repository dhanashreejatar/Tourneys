<?php

echo "Reached";
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
    $dates = $_POST['tourn_date_1'];//." - ".$_POST['tourn_dates_2'];
    //$sport= (that if condidtion)
    //$reg_yes_no =   ~~For radio button~~
    $reg_fee = $_POST['tourn_fee'];
    $deadline = $_POST['tourn_deadline'];
    $maxteams = $_POST['tourn_not'];
    $maxplayers = $_POST['tourn_nop'];

    $db_host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'tourneys';
	$connect=mysqli_connect( $db_host, $db_username, $db_password) or die(mysqli_error($connect));
	mysqli_select_db($connect,$db_name); 

	mysqli_query($connect,"INSERT INTO tournaments(tourn_name,tourn_venue,tourn_dates,tourn_fee,tourn_deadline,tourn_not,tourn_nop)
					VALUES('$name','$venue','$dates',$reg_fee,'$deadline',$maxteams,$maxplayers)")
	or die(mysqli_error($connect));

?>	
