<?php 
/*if (!session_id()) {
	# code...
	session_start();
}*/

$host="localhost";
$username="root";
$password="";
$db_name="eventdb";

//ma conectez cu baza de date si verific daca s-a realizat conexiunea
$conn = new mysqli($host, $username, $password,$db_name);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else{
	
}
?>
