<html>
<head>
<title>:: HO Site Customer Complain</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
		<link rel="icon" type="image/ico" href="image/favicon.ico">
</head>
<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword']) && !isset($_SESSION['e_no'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

<body   background="image/bg.jpg">
<center>
<div id="header">
 		<?php include 'erheder.php'; ?>
</div>
<div id="mainbody">
	<br/>
	<br/>
	<table width="90%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td>
	<?php
	
		$uname = $_SESSION['uname'];
		$e_no = $_SESSION['e_no'];
		$r_id = $_GET['r_id'];
		$er_id = $_GET['er_id'];
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
			
		$sql= "SELECT * 
FROM  `reportingdetail` WHERE r_id=".$r_id;
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{
			$cc_id=$row['cc_id'];

	?>

	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">

	<tr>
<th colspan="2"><!--<marquee behavior="alternate">--><font color="#000000" size="+3">Reporting of Eengineer <?php echo $er_id; ?></font><!--</marquee>--></th>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
		<th width="50%" align="Right" bgcolor="#A4A4A4">Row Name</th>
		<th width="50%" align="left" bgcolor="#A4A4A4">Data Contain</th>
	</tr>
	<tr bgcolor="#F2F2F2">
		<td align="right">Reporting id :</td>
		 <td align="left"><?php $r_id=$row['r_id']; echo $r_id; ?></td>
	</tr>
		
	<tr bgcolor="#E6E6E6">
		<td align="right">Engineer id :</td>
		<td align="left"><?php echo $row['er_no']; ?></td>
	</tr>
		
	<tr bgcolor="#F2F2F2">
		<td align="right">Reporting </td>
		<td align="left"><?php echo $row['reporting']; ?><?php $path = $row['rpath']; ?></td>
	</tr>	
	<tr bgcolor="#E6E6E6">
	<td colspan="2" valign="top">
	Document of File
	</td>
	</tr>
	<tr bgcolor="#F2F2F2">
	<td colspan="2" valign="top">

	<?php
$my_file = $path;
//$handle = fopen($my_file, 'r');
//$file = fread($handle,filesize($my_file));
//echo $data;
//include "$my_file"; 
					
//			$rpath = substr("$my_file",3);

		$file = fopen("$path", "r") or exit("Unable to open file!");
				
while(!feof($file))
  				{
  					//echo fgets($file). "<br>";
					$v=fgets($file). "<br>";
					echo $v;
  				}
				fclose($file);
?>

	</td>
	
	</tr>
	<!--
	<tr>
	
		<td align="right">View Document:</td>
		<td align="left">
		<?php //echo "<a href='openpdf.php?rpath=$path&amp;r_id=$r_id&amp;cc_id=$cc_id'>Open uploaded document</a>"; ?>
		</td>
	</tr>
	-->
	<?php } ?>
</table>
</td>
</tr>
<tr> 
<td></td>
</tr>
</table>
<br/>
<br/>


</div>

<div id="footer">
<br/>
<br/>
 		<?php include 'erfooter.php'; ?>
</div>
</center>
</body>
</html>
