<!--
Lloyd Robinson G. Lopez
N2
ITMC Platform Technologies
July 4, 2020
Midterm Requirement

Honor Code:
I completed this code by the help of my friends. Im not asking the code but an explanation only.
 
-->
<?php
	include "conn.php";
	header('location:Login-page.php');
	// connection to database
	mysqli_select_db($conn, 'data1');
	
	Session_start();
	// initialize variables 
	$uname= $_POST['uname'];
	$ename = $_POST['ename'];
	$pname = $_POST['pname'];
	// query to sql
	$Signup = "select * from userdata where Username = '$uname'";
	$result = mysqli_query($conn, $Signup);
	$num = mysqli_num_rows($result);
	
	// check if the username that the user has given was already taken
	if($num == 1) {
		echo "Username already taken";
	} else {
		$Sign= "INSERT INTO userdata(Username, Email, Password) VALUES ('$uname','$ename','$pname')";
		mysqli_query($conn, $Sign);
		echo "Signup Successful";
	}
?>