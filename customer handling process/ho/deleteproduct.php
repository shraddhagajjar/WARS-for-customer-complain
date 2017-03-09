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
<title>HO Delete PRoduct</title>
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
	$product_no = $_GET['product_no'];
	$i=0;
	$c="";
	$con=mysql_connect("localhost","root","");
	mysql_select_db("cchp",$con);
	$sql="SELECT * FROM `cchp`.`ccregister`;";		
	$result=mysql_query($sql,$con);
	while($row=mysql_fetch_array($result))
	{
		if($row['pr_no']==$product_no)
		{
			$i++;
		}
	}
	//	echo $i;
  		if ($i==0)
		{
	echo $i."if";
$sql1="DELETE FROM `cchp`.``productdetail`
WHERE `productdetail`.`product_no` = '$product_no';";
	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('Product Deleted succefully');   window.location.href='vproduct.php';</script>";
	}
	
	
}
	
	 else
	 {
	 
	echo $i."else";
		echo "<script>alert('This product have some complian so cant delete this product');   window.location.href='vproduct.php';</script>";
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

