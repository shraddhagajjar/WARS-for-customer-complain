<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

<?php

$host="localhost"; 

$user="root";

$pass="";

$connect=mysql_connect($host,$user,$pass);

$db=mysql_select_db("cchp");


?>