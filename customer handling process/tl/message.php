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
<title>:: Team Leader Site Meassage ::</title>
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
	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
	<tr>
		<th colspan="6"><font color="#000000" size="+3">Message OF Team Leader </font></th>
	</tr>
	<tr><td colspan="6">&nbsp;</td></tr>
	<tr bgcolor="#A4A4A4">
		<th width="20%" align="left">Reporting No</th>
		<th width="20%" align="left">Complain No</th> 
		<th width="20%" align="left">Message</th>
		<th width="20%" align="left">Status</th>
		<th width="20%" align="left">Conform</th>
	</tr>
	<?php
	$uname = $_SESSION['uname'];
		$teamno = $_SESSION['teamno'];
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;		
		$sql= "SELECT * 
FROM  `reportingdetail` WHERE teamno= $teamno AND h_cr = 1";
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{

		if($i%2!=0)
		{
	?>
	<tr bgcolor="#F2F2F2">
	 <td valign="top"><?php $r_id=$row['r_id']; 
	 	echo $r_id; ?> </td>
	 <td valign="top"><?php $cc_id=$row['cc_id']; echo $cc_id; ?> </td>
	 <td valign="top"><?php echo $row['t_replay']; ?> </td>
	 <td valign="top"><?php	echo "Checked"; ?></td>
	 <td valign="top"><?php echo "conform"; ?></td>
	</tr>
	<?php
	}
	else
	{
	?>
	
	<tr bgcolor="#E6E6E6">
	 <td valign="top"><?php $r_id=$row['r_id']; 
	 	echo $r_id; ?> </td>
	 <td valign="top"><?php $cc_id=$row['cc_id']; echo $cc_id; ?> </td>
	 <td valign="top"><?php echo $row['t_replay']; ?> </td>
	 <td valign="top"><?php	echo "Checked"; ?></td>
	 <td valign="top"><?php echo "conform"; ?></td>
	<?php
	}
	$i++;
	}
	?>
	
	
</table>
	</td>
	
	</tr>	
	<tr>
	<td>
	</td>
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
