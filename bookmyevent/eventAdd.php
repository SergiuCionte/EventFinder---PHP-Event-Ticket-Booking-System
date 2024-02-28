<?php 
if (!session_id()) {
	session_start();
} 
include_once 'db.php';

//$userId=$_SESSION['user'];

//Reducing seats
//$eventId=$_SESSION['eventId'];
//$eventIdentity=$conn->query("select * from eventlist where eventId=$eventId;");
//$row=$eventIdentity->fetch_object();

$id=$_POST['eventId'];
$name=$_POST['Name'];
$desc=$_POST['Description'];
$short_desc=$_POST['Short_Desc'];
$image=$_POST['image'];
$seats=$_POST['seats'];
$venue=$_POST['Venue'];
$price=$_POST['price'];

//$newSeatCount=$no_of_tickets;
$conn->query("insert into eventlist values ($id, '$name', '$desc', '$short_desc', '$image', $seats, '$venue', $price);");




?>