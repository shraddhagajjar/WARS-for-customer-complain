<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword']) && !isset($_SESSION['teamno'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

<html>
<head>
<title>:: HO Customer Complain Site::</title>
	<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body   background="image/bg.jpg">
<center>
<div id="header">
 		<?php include 'tlheder.php'; ?>
</div>
<div id="mainbody">
	<br/>
	<br/>
<table width="90%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td width="100%" align="center">
		<?php include 'contenthocc.php'; ?>
	</td>
	<tr><td></td></tr>
	</tr>	
</table>
<br/>
<br/>
</div>

<div id="footer">
<br/>
<br/>
 		<?php include 'tlfooter.php'; ?>
</div>

</center>
</body>
</html>
