<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = trim($str);
		return $str;
	}
 
	//Sanitize the POST values
	
	//Input Validations
	
 
	//If there are input validations, redirect back to the login form
	
 
	//Create query
	$qry="SELECT * FROM tournament_connect WHERE tourn_id='1'";
	$result=mysqli_query($bd,$qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			//echo $result->fetch_object();
			$no=mysqli_num_rows($result);
			$stack = array();
			while($member = mysqli_fetch_assoc($result))
			{
			array_push($stack,$member['team_name']);
			}
			if($no<=4)
			{
				for($hi=0;$hi<(4-$no);$hi++)
				{
					array_push($stack,"null");
				}
				$win="A";
				for($hi1=0;$hi1<2;$hi1++)
				{
					if($stack[$hi1]!="null"&&$stack[3-$hi1]!="null")
					{
						echo '<tr>';
						echo '<td>'.$win.'</td>';
						//echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
						echo '<td>'.$stack[$hi1].'</td>';
						//echo " vs ";
						echo '<td>'.$stack[3-$hi1].'</td>';
						echo '</tr>';
						echo ' <br> ';
						$stack[$hi1]=$win;
						$stack[3-$hi1]=$win;
						$win++;
					}
					else{
						$stack[3-$hi1]=$stack[$hi1];
					}						
				}
					if(strlen($stack[0])!=1)
					{
						$team1=$stack[0];
					}						
					else
					{
						$team1="Winner of ".$stack[0];
					}
					if(strlen($stack[1])!=1)
					{
						$team2=$stack[1];
					}						
					else
					{
						$team2="Winner of ".$stack[1];
					}
					echo $win;
					echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
					echo $team1;
					echo " vs ";
					echo $team2;
			}
			else if($no<=8)
			{
				for($hi=0;$hi<(8-$no);$hi++)
				{
					array_push($stack,"null");
				}
				$win="A";
				$time=12.00;
				for($hi1=0;$hi1<4;$hi1++)
				{
					if($stack[$hi1]!="null"&&$stack[7-$hi1]!="null")
					{
						echo '<tr>';
						echo '<td>Day1</td>';
						echo '<td>'.$time.'</td>';
						echo '<td>'.$win.'</td>';
						//echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
						echo '<td>'.$stack[$hi1].'</td>';
						//echo " vs ";
						echo '<td>'.$stack[7-$hi1].'</td>';
						echo '</tr>';
						echo ' <br> ';
						$stack[$hi1]=$win;
						$stack[7-$hi1]=$win;
						$win++;
						$time++;
						$time++;
					}
					else{
						$stack[7-$hi1]=$stack[$hi1];
					}						
				}
				$time=12.00;
				for($hi1=0;$hi1<2;$hi1++)
				{
					if(strlen($stack[$hi1])!=1)
					{
						$team1=$stack[$hi1];
					}
					else
					{
						$team1="Winner of ".$stack[$hi1];
					}
					if(strlen($stack[3-$hi1])!=1)
					{
						$team2=$stack[$hi1];
					}
					else
					{
						$team2="Winner of ".$stack[3-$hi1];
					}
					$stack[3-$hi1]=$win;
					$stack[$hi1]=$win;
					echo '<tr>';
						echo '<td>Day2</td>';
						echo '<td>'.$time.'</td>';
						echo '<td>'.$win.'</td>';
						//echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
						echo '<td>'.$team1.'</td>';
						//echo " vs ";
						echo '<td>'.$team2.'</td>';
						echo '</tr>';
						echo ' <br> ';
						$time++;
						$time++;
					$win++;
				}
				if(strlen($stack[0])!=1)
					{
						$team1=$stack[0];
					}						
					else
					{
						$team1="Winner of ".$stack[0];
					}
					if(strlen($stack[1])!=1)
					{
						$team2=$stack[1];
					}						
					else
					{
						$team2="Winner of ".$stack[1];
					}
					echo '<tr>';
						echo '<td>Day3</td>';
						echo '<td>12</td>';
						echo '<td>'.$win.'</td>';
						//echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
						echo '<td>'.$team1.'</td>';
						//echo " vs ";
						echo '<td>'.$team2.'</td>';
						echo '</tr>';
						echo ' <br> ';
				
			}
			else if($no<=16)
			{
			}
		
			exit();
		}
		else {
			//Login failed
			$errmsg_arr[] = 'Username and Password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				echo "error";
				header("location:formm.html.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>