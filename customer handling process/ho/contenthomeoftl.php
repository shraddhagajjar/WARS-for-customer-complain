<html>
<head>
<title>:: HO Home of T L Site::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>
<br/>

 		<?php include 'tlajax.php'; ?>
<!--
	<table align="center" cellpadding="5" cellspacing="5" width="100%" class="c">
		<tr>
		<th colspan="5"><font color="#000000" size="+3">Team Leader List & Add Engineer To Team </font></th>
	</tr>
	<tr><td colspan="5">&nbsp;</td></tr>
		
	<tr bgcolor="#A4A4A4">
		<th width="" align="left">Team No</th>
		<th width="" align="left">Name</th>
		<th width="" align="left">Location</th>
		<th width="" align="left">Engineer List</th>
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
		$sql1="SELECT * FROM `teamdetail`";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$c=$row['teamno'];
			if($i%2!=0)
			{
		?>		
		
	<tr bgcolor="#F2F2F2">
	<td ><?php// echo $c ?></td>
	<td><?php// echo $row['name']; ?></td>
	<td><?php// echo $row['location']; ?></td>
	<td><?php// $d=$row['e_no']; 
				echo $d;?></td>
	<?php//
			if($d<5)
			{
		?>
	<td><a href="ccdetails.php?cc=<?php// echo $c; ?>" >Add Enigneerr</a></td>
	<?php// 
		}
		else
		{
	?>
		<td><a href="" >Engineer List is full</a></td>
		<?php//
		}
		?>
	
	</tr>
	<?php//
	
			}
			else
			{
			?>
		
	<tr bgcolor="#E6E6E6">
	
	<td ><?php// echo $c ?></td>
	<td><?php// echo $row['name']; ?></td>
	<td><?php// echo $row['location']; ?></td>
	<td><?php// $d = $row['e_no'];
					echo $d;?></td>
	<?php// 
			if($d<5)
			{
		?>
	<td><a href="cne.php?cc=<?php// echo $c; ?>" >Add Enigneerr</a></td>
	<?php// 
		}
		else
		{
	?>
		<td><a href="" >Engineer List is full</a></td>
		<?php// 
		}
		?>
	

	
	</tr>	
			<?php//
			
			}
			$i++;	
	}
	?>
</table>
-->
	<br/>
	
</body>
</html>
