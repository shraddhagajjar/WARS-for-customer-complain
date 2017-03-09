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
<title>HO View Location</title>
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
	
	<table width="" align="center" cellpadding="5" cellspacing="5"  class="c" border="0">
	<tr bordercolor="#FFFFFF">
		<th colspan="4" ><font color="#000000" size="+3">All Location  Currently working</font></th>	
	</tr>
	
	<tr bordercolor="#FFFFFF"><td  colspan="4">&nbsp;</td></tr>
	
	<tr bgcolor="#A4A4A4">
		
			<th align="left">
				Location Id
			</th>
			<th  align="left">
			
				Location Name
			</th>
			<th  align="left">
			
				Delete
			</th>	
			<th  align="left">
				Edit
			</th>
			
		</tr>
	<?php
	$i=0;
	$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		
		$sql= "SELECT * 
FROM  `location` ";
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{
	if($i%2!=0)
			{
	?>
		
		
	<tr bgcolor="#F2F2F2">
			<td>
				 <?php $loca_id = $row['loca_id']; echo $loca_id;?>
			</td>
			<td>
				 <?php echo $row['loca_name'];?>
			</td>
			<td>
			<?php echo "<a href='deletelocation.php?loca_id=$loca_id'>Delete</a>"; ?>
			</td>	
			
			<td>
			
			<?php echo "<a href='editlocation.php?loca_id=$loca_id'>Update</a>"; ?>
			</td>	
	</tr>
		<?php
		 }
		  else
		  {
		  
		?>	
	<tr bgcolor="#E6E6E6">
	
			<td>
				 <?php $loca_id = $row['loca_id']; echo $loca_id?>
			</td>
			<td>
				 <?php echo $row['loca_name'];?>
			</td>
			<td>
			<?php echo "<a href='deletelocation.php?loca_id=$loca_id'>Delete</a>"; ?>
			</td>	
			
			<td>
			
			<?php echo "<a href='editlocation.php?loca_id=$loca_id'>Update</a>"; ?>
			</td>	
			</td>
		<?php
			}
			$i++;
		?>
		<?php
		}
		?>		
		
		<tr>
		
		</tr>
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
