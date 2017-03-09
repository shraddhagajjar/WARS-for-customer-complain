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
<title>HO Delete Phone Operator</title>
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
	<?php
	$p_id = $_GET['p_id'];
  	$con=mysql_connect("localhost","root","");
 	mysql_select_db("cchp",$con);
	$sql1="DELETE FROM `cchp`.`phoneoperator`
WHERE `phoneoperator`.`p_id` = $p_id";
	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('Phone Operator Deleted succefully');   window.location.href='contentofvpho.php';</script>";
	}
	 
 mysql_close($con);	
?>


	<br/>
<br/>
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

