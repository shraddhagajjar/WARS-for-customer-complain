<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword']) && !isset($_SESSION['p_id'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

<html>
<head>
<title>Customer Complain</title>

<link rel="icon" type="image/ico" href="../image/favicon.ico">
<link rel="stylesheet" type="text/css" href="ccms.css" />
</head>
<body background="image/bg.jpg" >
<center>
<div id="header">
 		<?php include 'phoheder.php'; ?>
</div>
<div id="mainbody">
<br/>	
<table width="80%" align="center" cellpadding="10" cellspacing="5" id="t4">
	<tr>
		<td align="center" width="100%" valign="top">		
			<?php include 'ccf.php'; ?>		
		</td>
		
	</tr>	
</table>
</div>

<div id="footer">
 		<?php include 'phofooter.php'; ?>
</div>
</center>
</body>
</html>