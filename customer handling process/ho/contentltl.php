<html>
<head>
<title>:: HO Load Of TL Site::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>
<br/>
<br/>
<table width="100%" align="center" cellpadding="5" cellspacing="5"  class="c" border="0">
	<tr bordercolor="#FFFFFF">
		<th ><font color="#000000" size="+3">Work Load of Team </font></th>	
	</tr>
	<tr bordercolor="#FFFFFF"><td ></td></tr>
	<tr>
	<td>
	 	<table  cellpadding="5" cellspacing="5"  class="c" border="0" align="center" width="100%">
		<tr bgcolor="#A4A4A4">
		
			<th align="left">
				Team no 
			</th>
			<th  align="left">
			
					Team name 
			</th>
			<th  align="left">
			
				Team Location 
			</th>	
			<th  align="left">
			
				Total Engineer in Team
			</th>
			<th  align="left">
			
				Total Assign Complaint 
			</th>
			<th  align="left">	
			
				Currently Working on Complain 
			</th>
			<th  align="left">
			
			Total Solved Complain By Team 
			</th>
			</font>
		</tr>
		
	<?php
	$con = mysql_connect("localhost","root","");
	$i = 0;
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		
		$sql= "SELECT * 
FROM  `teamdetail`";
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{
			
			if($i%2!=0)
			{
	?>
		
		
	<tr bgcolor="#F2F2F2">
			<td>
				 <?php echo $row['teamno'];?>
			</td>
			<td>
				 <?php echo $row['name'];?>
			</td>
			<td>
				<?php echo $row['location']; ?>			
			</td>	
			<td>
			
		<?php
	
					$teamno = $row ['teamno'];
			$cc=0;
			$sql5="SELECT * FROM `engineerdetail` WHERE teamno =  $teamno;";
			$result5=mysql_query($sql5,$con);
			while($row5=mysql_fetch_array($result5))
			{
				$cc++;
			}
			 	echo $cc; 
				$cc=0;
				?>
			</td>
			<td>
			
		<?php
					$teamno = $row ['teamno'];
					
$p ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno;";
//$tl = 0;
$resul=mysql_query("$p");
while($row1 = mysql_fetch_array($resul))
{
	//echo "<font color=#000000 size=+3>";
	echo $row1['count'];
	//echo "</font>";
}    
//echo $tl; 
 ?>
			</td>
			<td>	
			
			<?php 
				
	$teamno = $row ['teamno'];				
	$p ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno;";
	$resul=mysql_query("$p");
	while($row1 = mysql_fetch_array($resul))
	{
		$ttl = $row1['count'];				
		$q ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND t_status = 1;";
		$resulq=mysql_query("$q");
		while($row2 = mysql_fetch_array($resulq))
		{
			$wtl = $row2['count'];
			$cwtl = $ttl - $wtl;	
			//echo "<font color=#000000 size=+3>";
			echo $cwtl;
			//echo "</font>";
		}   
	}    
?>
			</td>
			<td>
				<?php
					$teamno = $row ['teamno'];
					
$q ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND t_status = 1;";
//$tl = 0;
$resulq=mysql_query("$q");
while($row1 = mysql_fetch_array($resulq))
{
	//echo "<font color=#000000 size=+3>";
	echo $row1['count'];
	//echo "</font>";
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
			<td>
				 <?php echo $row['teamno'];?>
			</td>
			<td>
				 <?php echo $row['name'];?>
			</td>
			<td>
				<?php echo $row['location']; ?>			
			</td>	
			<td>
			<?php
			
					$teamno = $row ['teamno'];
			$cc=0;
			$sql6="SELECT * FROM `engineerdetail` WHERE teamno =  $teamno;";
			$result6=mysql_query($sql6,$con);
			while($row6=mysql_fetch_array($result6))
			{
				$cc++;
			}
			 	echo $cc; 
				$cc=0;
				?>
			</td>
			<td>
		<?php
					$teamno = $row ['teamno'];
					
$p ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno;";
//$tl = 0;
$resul=mysql_query("$p");
while($row1 = mysql_fetch_array($resul))
{
	//echo "<font color=#000000 size=+3>";
	echo $row1['count'];
	//echo "</font>";
}    
//echo $tl; 
 ?>
			</td>
			<td>	
			<?php 
				
	$teamno = $row ['teamno'];				
	$p ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno;";
	$resul=mysql_query("$p");
	while($row1 = mysql_fetch_array($resul))
	{
		$ttl = $row1['count'];				
		$q ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND t_status = 1;";
		$resulq=mysql_query("$q");
		while($row2 = mysql_fetch_array($resulq))
		{
			$wtl = $row2['count'];
			$cwtl = $ttl - $wtl;	
			//echo "<font color=#000000 size=+3>";
			echo $cwtl;
			//echo "</font>";
		}   
	}    
?>
			</td>
			<td>
				<?php
					$teamno = $row ['teamno'];
					
$q ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND t_status = 1;";
//$tl = 0;
$resulq=mysql_query("$q");
while($row1 = mysql_fetch_array($resulq))
{
	//echo "<font color=#000000 size=+3>";
	echo $row1['count'];
	//echo "</font>";
}    
//echo $tl; 
 ?>
			</td>
		</tr>
		<?php
			}
			$i++;
		?>
		<?php
		}
		?>
		</table>
		<br/>
	</td>
	</tr>
	</table>


</body>
</html>
