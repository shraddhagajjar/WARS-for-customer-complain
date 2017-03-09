<html>
<head>
<link rel="stylesheet" type="text/css" href="ho.css" />
<title>
</title>
</head>
<body>

<table align="center" cellpadding="5" cellspacing="5" width="100%" class="c">
	<tr>
		<th colspan="5"><font color="#000000" size="+3"> Compalin Detail With Currnet Status </font></th>
	</tr>
	<tr><td colspan="5">&nbsp;</td></tr>
		
	<tr bgcolor="#A4A4A4" >
		
		<th width="" align="right">Row name</th>
		<th width="" align="left">Content</th>
	
	</tr>
	
	
	<?php
	$s=$_GET["s"];
	//echo $q;
	//$teamno = $_GET['teamno'];
	$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		
		$sql= "SELECT * 
FROM  `ccregister` WHERE `cc_id` = $s";
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{
		
	?>		
		
		
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">Custumer ID</td>
			<td width="50%" align="left"><?php echo $s ?></td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right">Customer name</td>
			<td width="50%" align="left"><?php  echo $row['c_name']; ?></td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">Complain</td>
			<td width="50%" align="left"><?php echo $row['query']; ?></td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right"> Currently Status</td>
			<td width="50%" align="left">
			<?php 
			
				if($row['ho_status']==1)
				{
					echo("waiting for ho checking");	
				}
				else
				{
					if($row['tl_status']==0)
					{
						echo("waiting for tl checking");	
					}
					else
					{
						
						if(($row['er_status']==0))
						{		
							echo("waiting for tl checking");	
						}
						else
						{	
								if($row['c_status']==0)
								{
									echo("Work under Er");
								}
								else
								{
									if($row['t_status']==0)
									{
										echo("Waiting for TL conform");
									}
									else
									{
										if($row['h_status']==0)
										{
											echo("Waiting for Ho conform");
										}
										else
										{
											echo("Solve");
										}
									}
							
								
							}
						}
					}
					
				}
			?></td>
		</tr>
		
	<?php
}
mysql_close($con);
		?>
	
</table>


</body>
</html>
