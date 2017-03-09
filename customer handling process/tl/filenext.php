<html>
<head>
<title>:: HO Site Customer Complain</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
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
 		<?php include 'tlheder.php'; ?>
</div>
<div id="mainbody">
	<br/>
	<br/>
	
	<table width="90%" align="center" cellpadding="10" cellspacing="5" border="1">
	<tr>
	<td width="100%" align="center">
	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
	<tr>
	<th colspan="6"><font color="#000000" size="+3">Repoted Content </font></th>
	</tr>
	
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
		if($code == "1")
		{
		
		 $con=mysql_connect("localhost","root","");
		 mysql_select_db("cchp",$con);
		$sql="UPDATE  `cchp`.`reportingdetail` SET  `ho_id` =  '1' WHERE  `reportingdetail`.`r_id` = ".$r_id;
		
		
		if(!mysql_query($sql,$con))
		{
			  die('Errormmm: ' . mysql_error());	
		}
		else
		{
		
			$sql2="UPDATE `cchp`.`ccregister` SET `t_status` = '1' WHERE  `ccregister`.`cc_id` = ".$cc_id;
			if(!mysql_query($sql2,$con))
			{
				die('Errormmm: ' . mysql_error());	
			}
			else
			{
				echo "<script>alert('your reporting done succefully to ho');   window.location.href='index.php';</script>";
			}
				
		}
		
		
		?>
		<tr>
		<td width="100%" colspan="2">
		</td>
		</tr>
		<?php
		
		}
		?>
		<?php
		
		if($code == "2")
		{
		//echo "FOR Edit Report";
		?>
		
		<form name="edit" method="post">
		<tr>
		<td width="30%" valign="top" align="right">
				<label>Edit Text :</label>
		</td>
		<td width="70%" >
		<textarea rows="6" cols="50" id="text_edit" name="text_edit"></textarea>
		</td>
		</tr>
		
		<tr>
		<td align="center" colspan="2">
		<input type="submit" name="edit" value="submit"/>
		</td>
		</tr>
		</form>
		<?php
		
 		if(@$_POST['edit'])
		 {
			if(@$_POST['text_edit']!="")
			{
				$my_file = $rpath;
				$data = "<br/>";
				$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
				$data = $_POST['text_edit'];	
				fwrite($handle, $data);
				//fclose($my_file);
				echo "<script>alert('Editing done succfully');   window.location.href='reporting.php';</script>";
				
			}
		
			else
			{
				echo "<script>alert('Plzz enter file containt if u want to edit'); </script>";
			}
		}
		?>
		</td>
		
		<?php
		}
		?>
		
		<?php
		
		if($code == "3")
		{
		//echo "FOR Replay Report";
		
		?>
		
		<form name="replay" method="post">
		<tr>
		<td width="40%" valign="top" align="right">
			<label>Replay Content</label>
		</td>
		<td width="60%" valign="top">		
			<textarea rows="6" cols="50" id="text_replay" name="text_replay"></textarea>
		</td>
		</tr>
		<tr>
		<td colspan="2" align="center"><input type="submit" name="replay" value="submit" /> </td>
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
					$sql="UPDATE  `cchp`.`reportingdetail` SET  `t_replay` =  '$replay' ,`t_cr` = 1 WHERE  `reportingdetail`.`r_id` = ".$r_id;
		
		
					if(!mysql_query($sql,$con))
					{
			  			die('Errormmm: ' . mysql_error());	
					}
					else
					{
					echo "<script>alert('Replay send to Er Sussfully');   window.location.href='reporting.php';</script>";
					}
		
				}
				else
				{
						echo "<script>alert('Plzz enter message u want to give reaply'); </script>";
				}
			}
		?>
		<?php
		}

	?>
<?php
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
 		<?php include 'tlfooter.php'; ?>
</div>
</center>
</body>
</html>
