
<html>
<head>
<link rel="stylesheet" type="text/css" href="ho.css" />
<title>
</title>
</head>
<body>

	<table align="center" cellpadding="5" cellspacing="5" width="100%" class="c">
		<tr>
		<th colspan="5"><font color="#000000" size="+3"> Selected Team Details </font></th>
	</tr>
	<tr><td colspan="5">&nbsp;</td></tr>
		
	<tr bgcolor="#A4A4A4" >
		
		<th width="" align="right">Row name</th>
		<th width="" align="left">Content</th>
	
	</tr>
	
	
	<?php
	$q=$_GET["q"];
	//echo $q;

		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$sql1="SELECT * FROM `location` WHERE loca_id = $q ;";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$c=$row['loca_id'];
		?>		
		
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">Lcation ID</td>
			<td width="50%" align="left"><?php echo $c ?></td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right">Location Name</td>
			<td width="50%" align="left"><?php echo $row['loca_name'];  ?>
			</td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">Total Team in this Location</td>
			<td width="50%" align="left" valign="top">
		
		<?php
			$cc=0;
			$sql2="SELECT * FROM `teamdetail` WHERE `location` = $c ;";
			$result1=mysql_query($sql2,$con);
			while($row2=mysql_fetch_array($result1))
			{
				echo $row2['name']."<br/>";
			}
		?>
		</td>
		</tr>
		
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">Phone Operater in This Location</td>
			<td width="50%" align="left">
			
		<?php
			$cc=0;
			$sql2="SELECT * FROM `phoneoperator` WHERE `location` = $c ;";
			$result1=mysql_query($sql2,$con);
			while($row2=mysql_fetch_array($result1))
			{
				echo $row2['name']."<br/>";
			}
		?>
			</td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right"> Total Complain</td>
			<td width="50%" align="left">
			<?php 
			$cc=0;
			$sql2="SELECT * FROM `ccregister` WHERE `location` = $c ;";
			$result1=mysql_query($sql2,$con);
			while($row2=mysql_fetch_array($result1))
			{
				$cc++;
			}
				echo $cc;
			 ?></td>
		<?php 
	
		

}
mysql_close($con);
		?>
	
	</tr>
</table>


</body>
</html>
