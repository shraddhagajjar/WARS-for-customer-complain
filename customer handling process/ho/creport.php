<html>
<head>
<title>HO Team Leader Report</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
		<link rel="icon" type="image/ico" href="../image/favicon.ico">
</head>
<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword']) && !isset($_SESSION['teamno'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

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
	<td>
	<?php
	
		$uname = $_SESSION['uname'];
		$r_id = $_GET['r_id'];
		$er_id = $_GET['er_id'];
		$cc_id = $_GET['cc_id'];
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
			
		$sql= "SELECT * 
FROM  `reportingdetail` WHERE r_id=".$r_id;
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{
			$cc_id=$row['cc_id'];

	?>

	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">

	<tr>
<th colspan="2"><!--<marquee behavior="alternate">--><font color="#000000" size="+3">Reporting of Eengineer <?php echo $er_id; ?></font><!--</marquee>--></th>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
		<th width="50%" align="Right" bgcolor="#A4A4A4">Row Name</th>
		<th width="50%" align="left" bgcolor="#A4A4A4">Data Contain</th>
	</tr>
	<tr bgcolor="#F2F2F2">
		<td align="right">Reporting id :</td>
		 <td align="left"><?php $r_id=$row['r_id']; echo $r_id; ?></td>
	</tr>
		
	<tr bgcolor="#E6E6E6">
	
		<td align="right">Customer id :</td>
		<td align="left"><?php echo $row['cc_id']; ?></td>
	</tr>
		
	<tr bgcolor="#F2F2F2">
	
		<td align="right">Engineer id :</td>
		<td align="left"><?php echo $row['er_no']; ?></td>
	</tr>	
	<tr bgcolor="#E6E6E6">
	
		<td align="right">Complain</td>
	<td>
	<?php
		$sql1= "SELECT * 
FROM  `ccregister` WHERE cc_id=".$cc_id;
		$result1=mysql_query($sql1,$con);
		while($row1=mysql_fetch_array($result1))
		{
			echo $row1['query'];
		}
			?>
			</td>
	</tr>
	<tr bgcolor="#F2F2F2">
	
		<td align="right">Solution </td>
		<td align="left"><?php echo $row['reporting']; ?></td>
		</td>
	</tr>	
	
	<tr bgcolor="#E6E6E6">
	
		<td align="right">View Document:</td>
		<td align="left"><?php $path = $row['rpath']; ?>
		<?php echo "<a href='openpdf.php?rpath=$path&amp;r_id=$r_id&amp;cc_id=$cc_id'>Open uploaded document</a>"; ?>
		</td>
	</tr>
	<?php } ?>
</table>
</td>
</tr>
<tr> 
<td></td>
</tr>
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
