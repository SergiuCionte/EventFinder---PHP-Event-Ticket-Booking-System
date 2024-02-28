<?php 
if (!session_id()) {
# code...
	session_start();
} 
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
 <div class="container" style="border:1px solid red;">
  <div>
      <!-- Este prezentata lista cu evenimentele -->
    Events available
    <br>
          <?php 
          $count=0;
          //se iau toate evenimentele
          $res=$conn->query("select * from eventlist;");
          echo "<div class='row'>";
         
          while ($row=$res->fetch_object()) {
            $_SESSION['movie']=$row->eventId;

            if ($count==4) {

              echo "</div>
              <div class='row'>";
              $count=0;
            }
 //se afiseaza detaliile fiecarui eveniment si se face referinta la pagina de editare a evenimentului
            echo " 
            <div class='col-md-3'>
                <div class='card h-100'>
                      <img src='uploadimages/".$row->image."'/> 
                      <div class='card-body' style='height:250px'>
                        <h3 class='name'>".$row->Name."</h3>
                        <p>$row->Short_desc</p>

                        <div class='card-footer' style='position:absolute;bottom:0px;'>
                        <form action='Editing.php' method='post' >
                          <input type='hidden' name='eventId' value='".$row->eventId."' >
                          <input type='submit'  class='btn btn-primary btn-xs btn-block' type='submit' value='Edit' name='submit'>
                        </form>
                        </div>
                        </div>
                    </div>
                  </div>";
 //se trece la evenimentul urmator
            $count++;
          } ?>
   <form name="ticket_submit" action="SuccessAdded.php" method="post" >
										<tr>
                    <p><strong>Id</strong></p>
											<p><input class="boxStyle" type="number" name="eventId"></p>
                    	<p><strong>Name</strong></p>
											<p><input class="boxStyle" type="text" name="Name"></p>
                      <p><strong>Description</strong></p>
											<p><input class="boxStyle" type="text" name="Description"></p>
                      <p><strong>Short_Desc</strong></p>
											<p><input class="boxStyle" type="text" name="Short_Desc"></p>
                      <p><strong>image</strong></p>
											<p><input class="boxStyle" type="text" name="image"></p>
                      <p><strong>seats</strong></p>
											<p><input class="boxStyle" type="number" name="seats"></p>
                      <p><strong>Venue</strong></p>
											<p><input class="boxStyle" type="text" name="Venue"></p>
                      <p><strong>price</strong></p>
											<p><input class="boxStyle" type="number" name="price"></p>
                      <input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Add Event">
										</tr>
        </form>
        </div>
      </div>
    </div>

</body>
</html>