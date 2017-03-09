<html>
<head>
<title>:: HO Home of T L Site::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>
<br/>

	<?php include 'erajax.php'; ?>
	<br/>
	<!--
	<table align="center" cellpadding="5" cellspacing="5" width="100%" class="c">
	<tr>
		<th colspan="6"><font color="#000000" size="+3">Engineer List </font></th>
	</tr>
	<tr><td colspan="6">&nbsp;</td></tr>

		
	<tr bgcolor="#A4A4A4">
	
		<th width="" align="left">Engineer No</th>
		<th width="" align="left">Team No</th>
		<th width="" align="left">Name</th>
		<th width="" align="left">Location</th>
		<th width="" align="left">Complain List</th>
		<th align="left">Add new Engineer</th>
	</tr>
	
	<?php//
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
			$c=$row['teamno'];
			if($i%2!=0)
			{
		?>		
		
	<tr bgcolor="#F2F2F2">
	
	<td ><?php// echo $row['e_no']; ?></td>
	<td ><?php// echo $row['teamno']; ?></td>
	<td><?php// echo $row['name']; ?></td>
	<td><?php// echo $row['location']; ?></td>
	<td></td>
	<td><a href="?cc=<?php// echo $c; ?>" >View work Load</a></td>
	</tr>
	<?php//
	
			}
			else
			{
			?>
		
	<tr bgcolor="#E6E6E6">
	
	
	<td ><?php// echo $row['e_no']; ?></td>
	<td ><?php//echo $row['teamno']; ?></td>
	<td><?php// echo $row['name']; ?></td>
	<td><?php// echo $row['location']; ?></td>
	<td></td>
	<td><a href="?cc=<?php//echo $c; ?>" >Add Enigneerr</a></td>
	</tr>	
			<?php//
			
			//}
		//	$i++;	
	//}
	?>
</table>
-->
	<br/>
	
</body>
</html>
