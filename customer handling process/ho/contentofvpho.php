
<html>
<head>
<title>:: HO View pho Site ::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>

<br/>
	<table align="center" cellpadding="5" cellspacing="5" width="100%" class="c">
	
	 <tr>
		<th colspan="10"><font color="#000000" size="+3">Phone operator Details </font></th>
	</tr>
	<tr><td colspan="10">&nbsp;</td></tr>
		
	<tr bgcolor="#A4A4A4">
		<th width="" align="left">phone id</th>
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
		$sql1="SELECT * FROM `phoneoperator`";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$c=$row['p_id'];
			if($i%2!=0)
			{
		?>		
		
	<tr bgcolor="#F2F2F2">
	<td ><?php echo $c ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo $row['location']; ?></td>
	<td><?php echo $row['p_no']; ?></td>
	<td><?php echo $row['e_id']; ?></td>
	<td><?php echo $row['username']; ?></td>
	<td><?php echo $row['joindate'];?></td>
	<td><?php echo "<a href='deletepho.php?p_id=$c'>Delete</a>"; ?></td>
	<td><?php echo "<a href='editpho.php?p_id=$c'>Update</a>"; ?></td>
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
	
	<td><?php echo $row['username']; ?></td>
	<td><?php echo $row['joindate'];?></td>
	
	<td><?php echo "<a href='deletepho.php?p_id=$c'>Delete</a>"; ?></td>
	<td><?php echo "<a href='editpho.php?p_id=$c'>Update</a>"; ?></td>
	
	</tr>	
			<?php
			
			}
			$i++;	
	}
	?>
</table>


</body>
</html>

