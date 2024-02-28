<?php 
if (!session_id()) {
	session_start();
} 
//ma conectez cu baza de date
include_once 'db.php';

$userId=$_SESSION['user'];

//update la pret de la eveniment 
$eventId=$_SESSION['eventId'];
//selectez evenimentul
$eventIdentity=$conn->query("select * from eventlist where eventId=$eventId;");
$row=$eventIdentity->fetch_object();

$price=$_POST['price'];
$newPrice=$price;
//dau update
$conn->query("update eventlist set price=$newPrice where eventId=$eventId;");




?>