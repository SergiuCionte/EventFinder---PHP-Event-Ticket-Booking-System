<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>	
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- css files -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/customerPanel.css">
	

</head>
<body>

	<?php 
	include 'headerAdmin.php';
	$eventId=$_SESSION['eventId'];

	$eventIdentity=$conn->query("select * from eventlist where eventId=$eventId;");
	$row=$eventIdentity->fetch_object();

	$eventName=$row->Name;
	$price=$_POST['price'];

  ?>

<div class="container">
		<div class="row">
			<div class="col-md-12" >
				<h3>
          <?php 
          //$_SESSION['eventId']="";
          echo "".$eventName;
          ?>
        </h3>
				
						<div class="row">
							<div class="col-md-4 col-lg-4 ">
								<img alt="User Pic" src=<?php echo '"uploadimages/'.$row->image.'"';?> class=" img-responsive movie_pic"> 
							</div>
							<div class=" col-md-8 col-lg-8 "> 
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td><strong>Event Name </strong></td>
										<td><?php echo "".$row->Name;?> </td>
									</tr>
									<tr>
										<td><strong>Price </strong></td>
										<td><?php echo $price;?></td>
									</tr>
									<tr>
			
                    </td>
									</tr>
                  <form action="UpdateSuccessPrice.php" method="post">
                  <input type="hidden" name="price" value=<?php echo $price;?>>
										<tr>
											<td colspan="2" width="100%">
												<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Update">
											</td>
										</tr>
								</tbody>
							</table>
						
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>
