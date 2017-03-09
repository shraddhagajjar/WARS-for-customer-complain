
<html>
<head>
<title>:: HO Enginner Handle Site::</title>
	<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>

	<table align="center" cellpadding="5" cellspacing="5" width="100%" class="c">
		<tr>
		<th colspan="11"><font color="#000000" size="+3">Details of Engineer  </font></marquee></th>
	</tr>
	<tr><td colspan="11">&nbsp;</td></tr>
		
	<tr bgcolor="#A4A4A4">
		<th width="" align="left">Id</th>
		<th width="" align="left">Team No</th>
		<th width="" align="left">Name</th>
		<th width="" align="left">Address</th> 
		<th width="" align="left">Location</th>
		<th width="" align="left">p_no</th>
		<th width="" align="left">e_id</th>
		<th width="" align="left">username</th>
		<th width="" align="left">join date</th>
		<th width="" align="left">Delete</th>
		<th width="" align="left">Update</th>
	</tr>
	
	<?php
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$sql1="SELECT * FROM `engineerdetail`";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$c=$row['e_no'];
			if($i%2!=0)
			{
		?>		
		
	<tr bgcolor="#F2F2F2">
	<td ><?php echo $row['e_no']; ?></td>
	<td ><?php echo $row['teamno']; ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo $row['location']; ?></td>
	<td><?php echo $row['p_no']; ?></td>
	<td><?php echo $row['e_id']; ?></td>
	<td><?php echo $row['username']; ?></td>
	<td><?php echo $row['joindate'];?></td>
	<td><?php echo "<a href='deleteengineer.php?e_no=$c'>Delete</a>"; ?></td>
	<td><?php echo "<a href='editengineer.php?e_no=$c'>Update</a>"; ?></td>
	
	</tr>
	<?php
	
			}
			else
			{
			?>
		
	<tr bgcolor="#E6E6E6">
	
	<td ><?php echo $row['e_no']; ?></td>
	<td ><?php  echo $row['teamno'];?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo $row['location']; ?></td>
	<td><?php echo $row['p_no']; ?></td>
	<td><?php echo $row['e_id']; ?></td>
	<td><?php echo $row['username']; ?></td>
	<td><?php echo $row['joindate'];?></td>
	<td><?php echo "<a href='deleteengineer.php?e_no=$c'>Delete</a>"; ?></td>
	<td><?php echo "<a href='editengineer.php?e_no=$c'>Update</a>"; ?></td>
	
	</tr>	
			<?php
			
			}
			$i++;	
	}
	?>
</table>
</body>
</html>
