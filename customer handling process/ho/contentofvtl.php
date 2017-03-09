
<html>
<head>
<title>:: HO View T L Site ::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>

<br/>
	<table align="center" cellpadding="5" cellspacing="5" width="100%" class="c">
	
	 <tr>
		<th colspan="10"><font color="#000000" size="+3">Team Leader Details </font></th>
	</tr>
	<tr><td colspan="10">&nbsp;</td></tr>
		
	<tr bgcolor="#A4A4A4">
		<th width="5%" align="left" valign="top">Team No</th>
		<th width="10%" align="left" valign="top">Name</th>
		<th width="10%" align="left" valign="top">Address</th> 
		<th width="10%" align="left" valign="top">Location</th>
		<th width="10%" align="left" valign="top">p_no</th>
		<th width="10%" align="left" valign="top">e_id</th>
		<th width="10%" align="left" valign="top">username</th>
		<th width="10%" align="left" valign="top">join date</th>
		<th width="10%" align="left" valign="top">Delete</th>
		<th width="15%" align="left" valign="top">Update</th>
	</tr>
	
	<?php
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$sql1="SELECT * FROM `teamdetail`";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$c=$row['teamno'];
			if($i%2!=0)
			{
		?>		
		
	<tr bgcolor="#F2F2F2">
	<td valign="top" ><?php echo $c ?></td>
	<td valign="top"> <?php echo $row['name']; ?></td>
	<td valign="top"><?php echo $row['address']; ?></td>
	<td valign="top"><?php echo $row['location']; ?></td>
	<td valign="top"><?php echo $row['p_no']; ?></td>
	<td valign="top"><?php echo $row['e_id']; ?></td>
	<td valign="top"><?php echo $row['username'];
		$e_no = $row['e_no'];
	 ?></td>
	<td valign="top"><?php echo $row['joindate'];?></td>
	<td><?php echo "<a href='deletteamleder.php?teamno=$c&amp;e_no=$e_no'>Delete</a>"; ?></td>
	<td><?php echo "<a href='editteamleader.php?teamno=$c'>Update</a>"; ?></td>
	
	</tr>
	<?php
	
			}
			else
			{
			?>
		
	<tr bgcolor="#E6E6E6">
	<td ><?php echo $c ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo $row['location']; ?></td>
	<td><?php echo $row['p_no']; ?></td>
	<td><?php echo $row['e_id']; ?></td>
	<td><?php echo $row['username'];
	$e_no = $row['e_no'];
	 ?></td>
	<td><?php echo $row['joindate'];?></td>
	<td><?php echo "<a href='deletteamleder.php?teamno=$c&amp;e_no=$e_no'>Delete</a>"; ?></td>
	<td><?php echo "<a href='editteamleader.php?teamno=$c'>Update</a>"; ?></td>

	
	</tr>	
			<?php
			
			}
			$i++;	
	}
	?>
</table>


</body>
</html>
