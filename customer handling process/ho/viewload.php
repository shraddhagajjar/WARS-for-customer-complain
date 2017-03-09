<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword'])) {

		header("location:..\loginfinal.php");exit;	

}

?>
<html>
<head>
<title>HO View Load of Team</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />

		<link rel="icon" type="image/ico" href="../image/favicon.ico">
</head>

<body   background="image/bg.jpg">
<center>
 <div id="header">
 		<?php include 'hoheder.php'; ?>
</div>

<div id="mainbody">
	<br/>
	<br/>
	<table width="90%" align="center" cellpadding="10" cellspacing="5"  class="c" border="1">
	
	<tr>
	<td>
	<?php
	$teamno = $_GET['teamno'];
	$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		
		$sql= "SELECT * 
FROM  `teamdetail` WHERE teamno = $teamno";
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{

	?>
		
		
	 	<table  cellpadding="10" cellspacing="5"  class="c" border="0" align="center" width="100%">
		<tr bgcolor="#A4A4A4">
		<th ><font color="#000000" size="+3">Work Load of Team </font></th>	
		</tr>
		<tr  bgcolor="#F2F2F2">
			<td>
					Team no : <?php echo $row['teamno'];?>
			</td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td>
						Team name : <?php echo $row['name'];?>
			</td>
		</tr>
		
		<tr  bgcolor="#F2F2F2">
			<td>
						Team Location :<?php echo $row['location']; ?>			
			</td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td>
					Total Engineer in Team :<?php
	
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
		</tr>
		<tr  bgcolor="#F2F2F2">
			<td>
					
				Total Assign Complain :
				<?php
					$teamno = $row ['teamno'];
					
$p ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno;";
//$tl = 0;
$resul=mysql_query("$p");
while($row1 = mysql_fetch_array($resul))
{
	echo "<font color=#000000 size=+3>";
	echo $row1['count'];
	echo "</font>";
}    
//echo $tl; 
 ?>
			</td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td>
								Currently Working on Complain :
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
			echo "<font color=#000000 size=+3>";
			echo $cwtl;
			echo "</font>";
		}   
	}    
?>
			</td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td>
					Total Solved Complain By Team :			<?php
					$teamno = $row ['teamno'];
					
$q ="SELECT count(cc_id) as count FROM ccregister WHERE tl_status = $teamno AND t_status = 1;";
//$tl = 0;
$resulq=mysql_query("$q");
while($row1 = mysql_fetch_array($resulq))
{
	echo "<font color=#000000 size=+3>";
	echo $row1['count'];
	echo "</font>";
}    
//echo $tl; 
 ?>
			</td>
		</tr>
		</table>
		<?php
		}
		?>
		</td>
		</tr>
		
		</table>
		
	
<br/>
<br/>
		</div>

<div id="footer">
<br/>
<br/>
 		<?php include 'hofooter.php'; ?>
</div>
</center>
</body>
</html>
