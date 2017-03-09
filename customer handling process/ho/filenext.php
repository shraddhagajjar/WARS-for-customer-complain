<html>
<head>
<title>HO Reporting Confom</title>
<link rel="stylesheet" type="text/css" href="ho.css" />
<link rel="icon" type="image/ico" href="../image/favicon.ico">
</head>
<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword']) &&!isset($_SESSION['teamno'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

<body   background="image/bg.jpg">
<center>
<div id="header">
 		<?php include 'hoheder.php'; ?>
</div>
<div id="mainbody">
	<br/>
	<br/>
	
<?php
	$rpath = $_GET['path'];
	$r_id = $_GET['r_id'];
	$code = $_GET['code'];
	$cc_id = $_GET['cc_id'];

//echo $rpath;
//echo "<br/>";
//echo $r_id;
//echo "<br/>";
//echo $code;
//echo "<br/>";
?>
<?php
	//FOR Confirm Reporting
	if($code == "1")
	{
		 $l=date("Y-m-d");
		 $con=mysql_connect("localhost","root","");
		 mysql_select_db("cchp",$con);
		
			$sql2="UPDATE `cchp`.`ccregister` SET `h_status` = '1' `solvedate` = '$l' WHERE  `ccregister`.`cc_id` = ".$cc_id;
			if(!mysql_query($sql2,$con))
			{
				die('Errormmm: ' . mysql_error());	
			}
			else
			{
				echo "<script>alert('This Complain Soolve sussfully');   window.location.href='index.php';</script>";
			}
				
?>

	<table width="90%" align="center" cellpadding="10" cellspacing="5" border="1" >
	<tr>
	<td width="100%" align="center">
	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
	<tr>
	<th colspan="6"><font color="#000000" size="+3">Repoted Content </font></th>
	</tr>
	

		<tr>
			<td width="100%" colspan="2">
			</td>
		</tr>
	</table>
		<tr>
		<td>
		
		</td>
	</tr>
</table>

<?php		
		}
?>

<?php
		//For Reset Reporting..
		if($code == "2")
		{
		
?>		
	<table width="90%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td width="100%" align="center">
	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
	<tr>
	<th colspan="6"><font color="#000000" size="+3">Reply Content </font></th>
	</tr>
	

		<tr>
			<td align="center" colspan="2">
		<?php
		  	$con=mysql_connect("localhost","root","");
		 	mysql_select_db("cchp",$con);

$sql3="UPDATE `cchp`.`ccregister` SET `ho_status` = '1' , `tl_status`='0' , `er_status`='0' , `c_status`='0' , `t_status`='0' WHERE  `ccregister`.`cc_id` = ".$cc_id;
			if(!mysql_query($sql3,$con))
			{
				die('Errormmm: ' . mysql_error());	
			}
			else
			{
				echo "<script>alert('Complain reset succfully');   window.location.href='index.php';</script>";
			}
		 	echo "Reset";
		?>
			</td>
		</tr>
</table>		
	<tr>
		<td>
		
		</td>
	</tr>
</table>
		
		<?php 
		}
		?>

		
		<?php
		
		if($code == "3")
		{
		//echo "FOR Replay Report";
		
		?>
	<table width="90%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td width="100%" align="center">
	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
	<tr>
	<th colspan="6"><font color="#000000" size="+3">Reply Content </font></th>
	</tr>
	

		<form name="replay" method="post">
		<tr>
		<td width="40%" valign="top" align="right">
			<label>Reply Content :</label>
		</td>
		<td width="60%" valign="top">		
			<textarea rows="6" cols="50" id="text_replay" name="text_replay"></textarea>
		</td>
		</tr>
		<tr>
		<td width="40%" align="right">
		<input type="submit" name="replay" value="submit" />
		</td>
		<td width="60%" > </td>
		</tr>
		
		</form>
		<?php
			
 			if(@$_POST['replay'])
		 	{
				if(@$_POST['text_replay']!="")
				{
					$replay = $_POST['text_replay'];
					$con=mysql_connect("localhost","root","");
		 			mysql_select_db("cchp",$con);
					$sql="UPDATE  `cchp`.`reportingdetail` SET  `h_replay` =  '$replay' ,`h_cr` = 1 WHERE  `reportingdetail`.`r_id` = ".$r_id;
		
		
					if(!mysql_query($sql,$con))
					{
			  			die('Errormmm: ' . mysql_error());	
					}
					else
					{
					echo "<script>alert('Replay send to TL Sussfully');   window.location.href='reporting.php';</script>";
					}
		
				}
				else
				{
						echo "<script>alert('Plzz enter message u want to give reaply'); </script>";
						echo "<br/>";
				}
			}
		?>
		<?php
		}

	?>
	</table>
	<tr>
		<td>
		
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
