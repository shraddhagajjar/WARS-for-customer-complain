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
<title>HO Delete Engineer</title>
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
	$e_no = $_GET['e_no'];
  	$con=mysql_connect("localhost","root","");
 	mysql_select_db("cchp",$con);
	$sql1="DELETE FROM `cchp`.`engineerdetail`
WHERE `engineerdetail`.`e_no` = $e_no";
	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('Engineer Record  Deleted succefully');   window.location.href='vel.php';</script>";
	

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

