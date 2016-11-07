<?php
	//Start session
 
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
	
	$req=$_SESSION['draws'];
	//Create query
	$qry="SELECT * FROM tournament_connect WHERE tourn_id='$req'";
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
				$time=12.00;
				for($hi1=0;$hi1<2;$hi1++)
				{
					if($stack[$hi1]!="null"&&$stack[3-$hi1]!="null")
					{
						echo '<tr>';
						echo '<td>Day1</td>';
						echo '<td>'.$time.'</td>';
						echo '<td>'.$win.'</td>';
						$var1=$stack[$hi1];
						$var2=$stack[3-$hi1];
						echo '<td><a href="prof.html.php?data='.$var1.'"  id="'.$var1.'">'.$var1.'</a></td>';
						echo '<td><a href="prof.html.php?data='.$var2.'"  id="'.$var2.'">'.$var2.'</a></td>';
						echo '</tr>';
						echo ' <br> ';
						$stack[$hi1]=$win;
						$stack[3-$hi1]=$win;
						$win++;
						$time++;
						$time++;
					}
					else{
						$stack[3-$hi1]=$stack[$hi1];
					}						
				}
					echo '<td>Day1</td>';
					echo '<td>'.$time.'</td>';
					echo '<td>'.$win.'</td>';
					if(strlen($stack[0])!=1)
					{
						$team1=$stack[0];
						echo '<td><a href="prof.html.php?data='.$team1.'"  id="'.$team1.'">'.$team1.'</a></td>';
					}						
					else
					{
						$team1="Winner of ".$stack[0];
						echo '<td>'.$team1.'</td>';
					}
					if(strlen($stack[1])!=1)
					{
						$team2=$stack[1];
						echo '<td><a href="prof.html.php?data='.$team2.'"  id="'.$team2.'">'.$team2.'</a></td>';
					}						
					else
					{
						$team2="Winner of ".$stack[1];
						echo '<td>'.$team2.'</td>';
					}
					
					//echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
					
					//echo " vs ";
					
					echo '</tr>';
					echo ' <br> ';
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
						$var1=$stack[$hi1];
						$var2=$stack[7-$hi1];
						echo '<td><a href="prof.html.php?data='.$var1.'"  id="'.$var1.'">'.$var1.'</a></td>';
						echo '<td><a href="prof.html.php?data='.$var2.'"  id="'.$var2.'">'.$var2.'</a></td>';
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
					echo '<tr>';
						echo '<td>Day2</td>';
						echo '<td>'.$time.'</td>';
						echo '<td>'.$win.'</td>';
					if(strlen($stack[$hi1])!=1)
					{
						$team1=$stack[$hi1];
						echo '<td><a href="prof.html.php?data='.$team1.'"  id="'.$team1.'">'.$team1.'</a></td>';
					}
					else
					{
						$team1="Winner of ".$stack[$hi1];
						echo '<td>'.$team1.'</td>';
					}
					if(strlen($stack[3-$hi1])!=1)
					{
						$team2=$stack[$hi1];
						echo '<td><a href="prof.html.php?data='.$team2.'"  id="'.$team2.'">'.$team2.'</a></td>';
					}
					else
					{
						$team2="Winner of ".$stack[3-$hi1];
						echo '<td>'.$team2.'</td>';
					}
					$stack[3-$hi1]=$win;
					$stack[$hi1]=$win;
						//echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
						
						//echo " vs ";
						
						echo '</tr>';
						echo ' <br> ';
						$time++;
						$time++;
					$win++;
				}
				echo '<tr>';
						echo '<td>Day3</td>';
						echo '<td>12</td>';
						echo '<td>'.$win.'</td>';
				if(strlen($stack[0])!=1)
					{
						$team1=$stack[0];
						echo '<td><a href="prof.html.php?data='.$team1.'"  id="'.$team1.'">'.$team1.'</a></td>';
					}						
					else
					{
						$team1="Winner of ".$stack[0];
						echo '<td>'.$team1.'</td>';
					}
					if(strlen($stack[1])!=1)
					{
						$team2=$stack[1];
						echo '<td><a href="prof.html.php?data='.$team2.'"  id="'.$team2.'">'.$team2.'</a></td>';
					}						
					else
					{
						$team2="Winner of ".$stack[1];
						echo '<td>'.$team2.'</td>';
					}
					
						//echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
						
						//echo " vs ";
						
						echo '</tr>';
						echo ' <br> ';
				
			}
			else if($no<=16)
			{
			}
		
			exit();
		}
	}else {
		die("Query failed");
	}
?>