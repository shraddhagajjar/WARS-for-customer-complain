<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword']) && !isset($_SESSION['e_no'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

<html>
<head>
<title>Home Page of Engineer</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
		<link rel="icon" type="image/ico" href="../image/favicon.ico">
</head>

<body   background="image/bg.jpg">
<center>
<div id="header">

 		<?php include 'erheder.php'; ?>
</div>
<div id="mainbody">
	<br/>
	<br/>
<table width="100%" align="center" cellpadding="10" cellspacing="5">
	<tr>
	<td width="100%" align="center">
		<?php include 'home.php'; 
?>
	</td>
	</tr>	
</table>
</div>

<div id="footer">
<br/>
<br/>
 		<?php include 'erfooter.php'; ?>
</div>
</center>
</body>
</html>
