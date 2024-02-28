<?php 
if (!session_id()) {
	session_start();
}
session_destroy();
//se da log out si se revine la pagina intiala
header('Location: index.php');
?>