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
<title>:: TL Site OF CnC ::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>

<body  background="image/bg.jpg">
<center>
<div id="header">
 		<?php include 'tlheder.php'; ?>
</div>

<div id="mainbody">
	<br/>
	<br/>
	<br/>
<table width="95%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td width="100%" align="center">
	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">

	<tr>
<th colspan="2"><!--<marquee behavior="alternate">--><font color="#000000" size="+3">Customer Complain Details</font><!--</marquee>--></th>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
		<th width="50%" align="Right" bgcolor="#A4A4A4">Row Name</th>
		<th width="50%" align="left" bgcolor="#A4A4A4">Data Contain</th>
	</tr>
	
	<?php
		$c=$_GET['cc'];
//		echo $c;
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		
		$sql1="SELECT * FROM `ccregister` WHERE cc_id=".$c;
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{

		?>		
	<tr bgcolor="#F2F2F2">
		<td align="right">Product Number :</td>
		 <td align="left"><?php echo $row['pr_no']; ?></td>
	</tr>
		
	<tr bgcolor="#E6E6E6">
		<td align="right">Customer Name :</td>
		<td align="left"><?php echo $row['c_name']; ?></td>
	</tr>
		
	<tr bgcolor="#F2F2F2">
		<td align="right">Phone no :</td>
		<td align="left"><?php echo $row['ph_no']; ?></td>
	</tr>	
	<tr bgcolor="#E6E6E6">
		<td align="right">Alternate phone no :</td>
		<td align="left"><?php echo $row['aph_no']; ?></td>
	</tr>
	
	<tr bgcolor="#F2F2F2">
		<td align="right">Email Id :</td>
		<td align="left"><?php echo $row['e_id']; ?></td>
	</tr>	
	<tr bgcolor="#E6E6E6">
		<td align="right">Location :</td>
		<td align="left"><?php $location=$row['location']; echo $location; ?></td>
	</tr>
	<tr bgcolor="#F2F2F2">
		<td align="right">Selling Date:</td>
		<td align="left"><?php echo $row['s_date']; ?></td>
	</tr>
	<tr bgcolor="#E6E6E6">
		<td align="right">worrnty year :</td>
		<td align="left"><?php echo $row['w_year']; ?></td>
	</tr>
	<tr bgcolor="#F2F2F2">
		<td align="right">Query :</td>
		<td align="left"><?php echo $row['query']; ?></td>
	</tr>
	
	<tr bgcolor="#E6E6E6">
		<td align="right">Complain Date :</td>
		<td align="left"><?php echo $row['c_date']; ?></td>
	</tr>
	<tr bgcolor="#F2F2F2">
		<td colspan="2" align="right"><?php echo "<a href='assigntem.php?location=$location&amp;complain=$c'>Assign Engineer</a>"; ?></td>
	</tr>
	
	<tr bgcolor="#E6E6E6">
		<td colspan="2" align="right">&nbsp;</td>
	</tr>
	<?php
	}
	mysql_close($con);
	?>
</table>
		
	</td>
	</tr>	
	<tr>
	<td></td>
	</tr>
</table>
</br>
</br>
</div>


<div id="footer">
<br/>
<br/>
 		<?php include 'tlfooter.php'; ?>
</div>
</center>
</body>
</html>
