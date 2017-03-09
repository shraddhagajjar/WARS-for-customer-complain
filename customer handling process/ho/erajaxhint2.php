<html>
<head>
<link rel="stylesheet" type="text/css" href="ho.css" />
<title>
</title>
</head>
<body>

<table align="center" cellpadding="5" cellspacing="5" width="100%" class="c">
	<tr>
		<th colspan="5"><font color="#000000" size="+3"> Engineer Details </font></th>
	</tr>
	<tr><td colspan="5">&nbsp;</td></tr>
		
	<tr bgcolor="#A4A4A4" >
		
		<th width="" align="right">Row name</th>
		<th width="" align="left">Content</th>
	
	</tr>
	
	
	<?php
	$s=$_GET["s"];
	//echo $q;

		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$sql1="SELECT * FROM `engineerdetail` WHERE `e_no` = $s;";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$c=$row['e_no'];
		?>		
		
		
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">Er No</td>
			<td width="50%" align="left"><?php echo $c ?></td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right">Team no</td>
			<td width="50%" align="left"><?php echo $row['teamno']; ?></td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">Engineer Name</td>
			<td width="50%" align="left"><?php echo $row['name']; ?></td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right"> Address</td>
			<td width="50%" align="left"><?php echo $row['address']; ?></td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right"> Location</td>
			<td width="50%" align="left"><?php echo $row['location']; ?></td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right"> Phone no</td>
			<td width="50%" align="left"><?php echo $row['p_no']; ?></td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right"> Email_id</td>
			<td width="50%" align="left"><?php echo $row['e_id']; ?></td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right"> User name</td>
			<td width="50%" align="left"><?php echo $row['username']; ?></td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">password</td>
			<td width="50%" align="left"><?php echo $row['password']; ?></td>
		</tr>
		
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right">Join Date</td>
			<td width="50%" align="left"><?php echo $row['joindate']; ?></td>
		</tr>
	<?php
}
mysql_close($con);
		?>
	
</table>


</body>
</html>
