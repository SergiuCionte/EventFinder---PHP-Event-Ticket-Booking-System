<?php 
if (!session_id()) {
	session_start();
} 
include_once 'db.php';

$userId=$_SESSION['user'];

//Reducing seats
$eventId=$_SESSION['eventId'];
$eventIdentity=$conn->query("select * from eventlist where eventId=$eventId;");
$row=$eventIdentity->fetch_object();

$no_of_tickets=$_POST['seats'];
$newSeatCount=$no_of_tickets;
$conn->query("update eventlist set seats=$newSeatCount where eventId=$eventId;");




?>
