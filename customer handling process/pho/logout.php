<html>
<head>

<title>:: Er Site OF CnC ::</title>
</head>

<body>
<?php
// Inialize session
session_start();

// Delete certain session
unset($_SESSION['uname']);
unset($_SESSION['pword']);
unset($_SESSION['p_id']);
// Delete all session variables
// session_destroy();

// Jump to login page

	header("location:../loginfinal.php");exit;	
?>
</body>
</html>
