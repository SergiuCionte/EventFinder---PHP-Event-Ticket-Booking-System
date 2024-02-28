  <?php
  if (!session_id()) {
    session_start();
  }
  include_once ('db.php');


  $user=$_REQUEST['postName'];
  $pass=$_REQUEST['postPassword'];

  //se prezinta logica de login si se cauta utilizatorul care are numele de utilizator si parola ceruta
  $sql="select userId,status from user where  userName ='$user' and password='$pass';";

  //cont de administrator sau participant?
  $account_type="";

  $res=$conn->query($sql);
  if (($data=$res->fetch_object())) {
    $_SESSION['user']= $data->userId ;
    $account_type=$data->status;

//cont de administrator
    if (  $account_type ==="101") {
      echo "1";
//cont de participant
    }else if ($account_type ==="202"){
      echo "2";
    }
  }else{
    echo "3";
  }

  ?>