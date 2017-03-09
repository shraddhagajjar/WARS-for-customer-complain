<?php
 $con=mysql_connect("localhost","root","");
 mysql_select_db("cchp",$con);
 @$a=$_POST['addlocation'];
 if(@$_POST['submit'])
 {
 
$sql1= "INSERT INTO  `cchp`.`location` (
`loca_name`
)
VALUES (
'$a'
);";

	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('location added succefully');   window.location.href='viewlocation.php';</script>";
	

	}
	 
 }
 mysql_close($con);	
?>

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
<title>HO Add Location</title>
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
<table width="90%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td width="100%" align="left" valign="top">
	
	<table  align="center" cellpadding="5" cellspacing="5"  class="c" border="0">
	<tr bordercolor="#FFFFFF">
		<th colspan="4" ><font color="#000000" size="+3">Add New Location </font></th>	
	</tr>
	
	<tr bordercolor="#FFFFFF"><td  colspan="4"></td></tr>
	
	<tr bgcolor="#A4A4A4">
	<td colspan="2">&nbsp;</td>
	</tr>
	<form method="post" name="addlcoation">
	<tr bgcolor="#F2F2F2">
			
		<td align="right" width="50%">
				Location
		</td>
		<td align="left" width="50%">
			<input type="text" name="addlocation"/>
		</td>
		
	</tr>
	<tr bgcolor="#E6E6E6">
		<td colspan="2" align="center">
		<input type="submit" name="submit" value="submit">
		</td>
	</tr>
	</form>
		<br/>
	</table>
	
	</td>
	</tr>	
	<tr><td></td></tr>
</table>
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

