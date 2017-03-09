<?php

   $con=mysql_connect("localhost","root","");
 mysql_select_db("cchp",$con);
 @$a=$_POST['text_locaname'];
 @$b=$_POST['text_locaid'];
 if(@$_POST['submit'])
 {
 
 if ($b!="")
 {
 
 $sql1 = "UPDATE  `cchp`.`location` SET  `loca_name` =  '$a' WHERE  `location`.`loca_id` = $b";

	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('location Update succefully');   window.location.href='viewlocation.php';</script>";
	

	}
	 
 }
 else
 {
 		echo "<script>alert('Add Location name');  </script>";
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
<title>HO Update Location</title>
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
		<form method="post" name="editlcoation">

<table width="90%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td width="100%" align="left" valign="top">
	
	<table  align="center" cellpadding="5" cellspacing="5"  class="c" border="0">
	<tr bordercolor="#FFFFFF">
		<th colspan="4" ><font color="#000000" size="+3">Edit Location </font></th>	
	</tr>
	
	<tr bordercolor="#FFFFFF"><td  colspan="4"></td></tr>
	
	<tr bgcolor="#A4A4A4">
	<td colspan="2">&nbsp;</td>
	</tr>
	<tr bgcolor="#F2F2F2">
			
		<td align="right" width="50%">
				Location
		</td>
		<td align="left" width="50%">
		
	<?php
	 $loca_id = $_GET['loca_id'];
	 //echo $loca_id;
	 ?>
	 <input type="hidden" value="<?php echo $loca_id ?>" name="text_locaid">
	 <?php
	 $con=mysql_connect("localhost","root","");
	 mysql_select_db("cchp",$con);
	 $sql = "SELECT * FROM `cchp`.`location` WHERE `location`.`loca_id` = $loca_id";
	 $result=mysql_query($sql,$con);
	while($row=mysql_fetch_array($result))
	{
		$loca_name = $row['loca_name'];
	?>
			<input type="text" name="text_locaname"/><?php echo $loca_name;?>
		</td>
	<?php
		}
	?>	
	</tr>
	<tr bgcolor="#E6E6E6">
		<td colspan="2" align="center">
		<input type="submit" name="submit" value="submit">
		</td>
	</tr>
		<br/>
	</table>
	
	</td>
	</tr>	
	<tr><td></td></tr>
</table>

	</form>
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

