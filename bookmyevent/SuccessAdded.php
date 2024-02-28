<?php 
if (!session_id()) {
	session_start();
} 
//ma conectez cu baza de date 
include 'db.php';
//fac update la numarul de tichete
include 'eventAdd.php';
?>

<!DOCTYPE html>
<html>
<head>
  
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- css files -->
  <link href="css/style.css" rel="stylesheet">

</head>
<body>
  
	<?php include 'header.php';?>
    <!-- afisez mesaj corespunzator si intru in customer page utilizand butonul home -->
	<h1 id="booked">Event added Sucessfully!!!</h1>
	<br>
	<a href="adminpage.php"><input type=button value='HOME'></a>
</body>
</html>