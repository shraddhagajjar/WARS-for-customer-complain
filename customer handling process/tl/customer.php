<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword']) && !isset($_SESSION['teamno'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

<html>
<head>
<title>HO All Customer List</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
		
		<link rel="icon" type="image/ico" href="../image/favicon.ico">
</head>

<body   background="image/bg.jpg">
<center>
 <div id="header">
 		<?php include 'tlheder.php'; ?>
</div>
<div id="mainbody">
	<br/>
	<br/>
<table width="90%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td width="100%" align="left" valign="top">
	
	<table width="100%" align="center" cellpadding="5" cellspacing="5"  class="c" border="0">
	<tr bordercolor="#FFFFFF">
		<th colspan="4" ><font color="#000000" size="+3">Total Complain Assigned </font></th>	
	</tr>
	
	<tr bordercolor="#FFFFFF"><td  colspan="4">&nbsp;</td></tr>
	
	<tr bgcolor="#A4A4A4">
		
			<th align="left">
				Customer ID 
			</th>
			<th  align="left">
			
					Customer Name
			</th>
			<th  align="left">
			
				Complain 
			</th>	
			<th  align="left">
			
				Currently Status
			</th>
			
		</tr>
	<?php
	$i=0;
	$teamno = $_SESSION['teamno'];
	$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		
		$sql= "SELECT * 
FROM  `ccregister` WHERE tl_status = $teamno";
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{
	if($i%2!=0)
			{
	?>
		
		
	<tr bgcolor="#F2F2F2">
			<td>
				 <?php echo $row['cc_id'];?>
			</td>
			<td>
				 <?php echo $row['c_name'];?>
			</td>
			<td>
				<?php echo $row['query']; ?>			
			</td>	
			<td>
			<?php
						
						if($row['er_status']==0)
						{		
							echo("Not Assing TO Er");	
						}
						else
						{	
								if($row['c_status']==0)
								{
									echo("Work Under By Er");
								}
								else
								{
									if($row['t_status']==0)
									{
										echo("Waiting for Your conform");
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
				 <?php echo $row['cc_id'];?>
			</td>
			<td>
				 <?php echo $row['c_name'];?>
			</td>
			<td>
				<?php echo $row['query']; ?>			
			</td>	
			<td>
			<?php
						if($row['er_status']==0)
						{		
							echo("Not Assing TO Er");	
						}
						else
						{	
								if($row['c_status']==0)
								{
									echo("Work Under By Er");
								}
								else
								{
									if($row['t_status']==0)
									{
										echo("Waiting for Your conform");
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
			?>
			</td>
		<?php
			}
			$i++;
		?>
		<?php
		}
		?>		
		
		<tr>
		
		</tr>
		<br/>
	</table>
	
	</td>
	</tr>	
	<tr><td></td></tr>
</table>
<br/>
<br/>
</div>

<div id="footer">
<br/>
<br/>
 		<?php include 'tlfooter.php'; ?>
</div>
</center>
</body>
</html>
