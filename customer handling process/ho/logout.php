<html>
<head>

<title>:: HO footer ::</title>
</head>

<body>
<?php
// Inialize session
session_start();

// Delete certain session
unset($_SESSION['uname']);
unset($_SESSION['pword']);
// Delete all session variables
// session_destroy();

// Jump to login page

	header("location:../loginfinal.php");exit;	
?>
</body>
</html>
