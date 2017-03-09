<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword'])) {

		header("location:..\loginfinal.php");exit;	

}

?>
<html>
<head>
<title>:: Customer Details of Complain Ho Site ::</title>
</head>

<body>
</body>
</html>
