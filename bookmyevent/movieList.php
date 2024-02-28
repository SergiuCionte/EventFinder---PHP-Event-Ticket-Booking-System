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
  <!-- Este prezentata lista cu evenimentele -->
 <div class="container" style="border:1px solid red;">
  <div>
    Events available
    <form action='customerPagePriceSortedAsc.php'  >
                       
                          <input type='submit'  class='btn btn-primary btn-xs btn-block' type='submit' value='Sort by price' name='submit'>
                        </form>
    <br>
<!-- se face referinta la pagina unde evenimentele sunt sortate dupa id si se trimite id-ul -->
    <form name="ticket_submit" action="movieListIdSorted.php" method="post"  >
										<tr>
											<td><strong>Event ID</strong></td>
											<td><input class="boxStyle" type="number" name="id"></td>
										</tr>
      <!-- se face referinta la pagina unde evenimentele sunt sortate dupa pret crscator -->
     <form action='customerPagePriceSortedAsc.php'  >
                       
      <input type='submit'  class='btn btn-primary btn-xs btn-block' type='submit' value='Sort by id' name='submit'>
      </form>
      
          <?php 
          $count=0;
      
          $stringArray = array();
          $googleMapsIframeURL = array();
          //array unde sunt stocate hartile
          $googleMapsIframeURL[0] = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18384.206963520523!2d23.579393690887866!3d46.768272569732126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490e8f6ad87633%3A0x23f7c32408a471a4!2sCluj%20Arena!5e0!3m2!1sen!2sro!4v1705443806412!5m2!1sen!2sro';
          $googleMapsIframeURL[1] = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.7988782960315!2d26.147674452075574!3d44.43728762702763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f932b120b96b%3A0x53a7021f11d624a4!2sThe%20National%20Arena!5e0!3m2!1sen!2sro!4v1705446608320!5m2!1sen!2sro';
          $googleMapsIframeURL[2] = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2847.937748178085!2d26.092791011708933!3d44.45494770008841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8abcf000001%3A0x764025310037d3c1!2sWashington%20Residence!5e0!3m2!1sen!2sro!4v1705446852138!5m2!1sen!2sro';
          $googleMapsIframeURL[3] = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2854.801246467227!2d23.781726411702042!3d44.31403630931964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4752d79a8a481a8b%3A0xcf6755a44c86c33!2sIon%20Oblemenco%20Stadium!5e0!3m2!1sen!2sro!4v1705446944989!5m2!1sen!2sro';
          $googleMapsIframeURL[4] = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.5327757173086!2d21.239168252530156!3d45.74046404063398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d92ebd3d733%3A0xf3fdfa7034ef15b8!2sStadionul%20Dan%20P%C4%83ltini%C8%99anu!5e0!3m2!1sen!2sro!4v1705447006332!5m2!1sen!2sro';
          $googleMapsIframeURL[5] = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.004260157559!2d-3.693199249246429!3d40.45304268001087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228e23705d39f%3A0xa8fff6d26e2b1988!2sSantiago%20Bernab%C3%A9u%20Stadium!5e0!3m2!1sen!2sro!4v1705447560651!5m2!1sen!2sro';
          // Now you can use $googleMapsIframeURL wherever you need it in your code
          $googleMapsIframeURL[6] = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.686291284756!2d2.1202395115622577!3d41.38089999627804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498f576297baf%3A0x44f65330fe1b04b9!2sSpotify%20Camp%20Nou!5e0!3m2!1sen!2sro!4v1705447802069!5m2!1sen!2sro';
          $googleMapsIframeURL[7] = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.039065554897!2d23.576356411872155!3d47.664237483875525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4737dc6105a27895%3A0xa0fce9701090630a!2sStadionul%20Viorel%20Mateianu!5e0!3m2!1sen!2sro!4v1705447852917!5m2!1sen!2sro';
          //echo "<iframe src='{$googleMapsIframeURL}' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
          
          //se iau toate evenimentele
          $res=$conn->query("select * from eventlist ;");
          echo "<div class='row'>";
         
          while ($row=$res->fetch_object()) {
            $_SESSION['movie']=$row->eventId;

            if ($count==10) {

              echo "</div>
              <div class='row'>";
              $count=0;
            }
            //se afiseaza detaliile fiecarui eveniment si se face referinta la pagina de cumparare a tichetului
            echo "
            <div class='col-md-3'>
                <div class='card h-100'>
                    <img src='uploadimages/".$row->image."'/> 
                    <div class='card-body' style='height:300px'>
                        <h3 class='name'>".$row->Name."</h3>
                        <p>$row->eventId</p>
                        <p>$row->Short_desc</p>
                        <p>$row->price</p>
            
                        <div class='card-footer' style='position:absolute;bottom:0px;'>
                            <form action='ticketProcessing.php' method='post' >
                                <input type='hidden' name='eventId' value='".$row->eventId."' >
                                <input type='submit'  class='btn btn-primary btn-xs btn-block' type='submit' value='Book tickets' name='submit'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <iframe src='{$googleMapsIframeURL[$count]}' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
            
            //se trece la evenimentul urmator
            $count++;
          } ?>

  
        </div>
      </div>
    </div>

</body>
</html>