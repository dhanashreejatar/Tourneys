<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
	
	$doneflag= "Done";
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = trim($str);
		return $str;
	}
 
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: formm.html.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM member WHERE mem_user_name='$username' AND mem_password='$password'";
	$result=mysqli_query($bd,$qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			
			echo "HI";
			$_SESSION['SESS_MEMBER_ID'] = 'Yo';
			$_SESSION['SESS_FIRST_NAME'] = $username;
			$_SESSION['SESS_LAST_NAME'] = $member['mem_password'];
			$_SESSION['DONE']=$doneflag;
			$_SESSION['username']=$member['mem_user_name'];
			$_SESSION['SESS_LOCATION']=$member['mem_location'];
			
			session_write_close();
			header("location:wt_home_4.html.php");
			exit();
		}
		else {
			//Login failed
			$errmsg_arr[] = 'Username and Password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location:formm.html.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>