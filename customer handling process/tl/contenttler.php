<html>
<head>
<title>:: HO Customer Complain Site::</title>
	<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>
	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
	<tr>
		<th colspan="9" align="center"><font color="#000000" size="+3">Engineer In Team </font></th>
	</tr>
	<tr><td colspan="9">&nbsp;</td></tr>
	<tr bgcolor="#A4A4A4">
	
		<th width="" align="left">Er No</th>
		<th width="" align="left">Er Name</th>
		<th width="" align="left">Address</th> 
		<th width="" align="left">Location</th>
		<th width="" align="left">Phone no</th>
		<th width="" align="left">Email id</th>	
		<th width="" align="left">Total Comaplin</th>
		<th width="" align="left">Currntly Working</th>
		<th width="" align="left">Solved</th>
	</tr>

	<?php
	
		$uname = $_SESSION['uname'];
		$teamno = $_SESSION['teamno'];
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$l=0;
		$sql1="SELECT * FROM `engineerdetail` WHERE teamno = $teamno";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$c=$row['e_no'];
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
	<td>
	<?php
	$p ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND er_status = $c;";
//$tl = 0;
$resul=mysql_query("$p");
while($row1 = mysql_fetch_array($resul))
{
	echo $row1['count'];
} 
   
?>
	</td>
	<td>
	<?php
	$p ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND er_status = $c;";
	$resul=mysql_query("$p");
	while($row1 = mysql_fetch_array($resul))
	{
		$ttl = $row1['count'];		
		$q ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND er_status = $c AND t_status = 1;";
		$resulq=mysql_query("$q");
		while($row2 = mysql_fetch_array($resulq))
		{
			
			 $wtl = $row2['count'];
			$cwtl = $ttl - $wtl;	
			echo $cwtl;
		}   
	}    
?>
	</td>
	<td>
	<?php

$teamno = $row ['teamno'];					
$q ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND er_status = $c AND t_status = 1;";
$resulq=mysql_query("$q");
while($row1 = mysql_fetch_array($resulq))
{
	echo $row1['count'];
}    
//echo $tl; 
 ?>
	</td>
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
	<td>
	
	<?php
	$p ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND er_status = $c;";
//$tl = 0;
$resul=mysql_query("$p");
while($row1 = mysql_fetch_array($resul))
{
	//echo "<font color=#000000 size=+3>";
	echo $row1['count'];
	//echo "</font>";
} ?>
	</td>
	<td>
	
	<?php
	$p ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND er_status = $c;";
	$resul=mysql_query("$p");
	while($row1 = mysql_fetch_array($resul))
	{
		$ttl = $row1['count'];		
		$q ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND er_status = $c AND t_status = 1;";
		$resulq=mysql_query("$q");
		while($row2 = mysql_fetch_array($resulq))
		{
			
			 $wtl = $row2['count'];
			$cwtl = $ttl - $wtl;	
			echo $cwtl;
		}   
	}    
	?>
	</td>
	<td>
	<?php

$teamno = $row ['teamno'];					
$q ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND er_status = $c AND t_status = 1;";
$resulq=mysql_query("$q");
while($row1 = mysql_fetch_array($resulq))
{
	echo $row1['count'];
}    
//echo $tl; 
 ?>
	</td>
	</tr>	
			<?php
			
			}
			$i++;	
	}
	?>
</table>

</body>
</html>
