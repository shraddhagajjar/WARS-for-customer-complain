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
<title>HO Delete Team Leader</title>
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
	$teamno = $_GET['teamno'];
	$e_no = $_GET['e_no'];
	$i=0;
	
  	if ($e_no==0)
	{
  		$con=mysql_connect("localhost","root","");
 		mysql_select_db("cchp",$con);
	//echo $e_no;
	$sql1="DELETE FROM `cchp`.`teamdetail`
WHERE `teamdetail`.`teamno` = $teamno";
	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('Team Leader Deleted succefully');   window.location.href='vtl.php';<script>";
	}
	
	
}
	
	 else
	 {
	 	echo "<script>alert('Here Team Have Engineer Cant Delete Team First Delete Engineer');   window.location.href='vtl.php';</script>";
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

