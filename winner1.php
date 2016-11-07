<?php
$winner=$_GET['data'];
$data2=$_GET['data2'];
require_once('connection.php');
$result = mysqli_query($bd, "INSERT INTO tournament_win VALUES($data2,'$winner')");
header("location:wt_home_4.html.php");
?>