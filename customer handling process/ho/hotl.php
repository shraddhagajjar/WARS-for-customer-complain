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
<title> HO Home Team Leader Site::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
		<link rel="icon" type="image/ico" href="../image/favicon.ico">
</head>

<body   background="image/bg.jpg">
<center>
 <div id="header">
 		<?php include 'hoheder.php'; ?>
</div>
<div id="mainbody">
	<br/>
	<br/>
<table width="95%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td width="100%" align="center" valign="top">
		<?php include 'contenthomeoftl.php'; ?>
	</td>
	</tr>	
	<tr><td></td></tr>
</table>
<br/>

</div>

<div id="footer">
<br/>
<br/>
 		<?php include 'hofooter.php'; ?>
</div>
</center>
</body>
</html>
