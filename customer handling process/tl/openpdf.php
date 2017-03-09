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
	<tr>
	<td width="100%">
<?php
$rpath = $_GET['rpath'];
$r_id = $_GET['r_id'];
$cc_id = $_GET['cc_id'];


$my_file = $rpath;
//$handle = fopen($my_file, 'r');
//$file = fread($handle,filesize($my_file));
//echo $data;
//include "$my_file"; 

		$file = fopen("$rpath", "r") or exit("Unable to open file!");
				
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
	</table>
	<tr>
	<td>
	<?php echo "<a href='filenext.php?path=$rpath&amp;r_id=$r_id&amp;code=1&amp;cc_id=$cc_id'>Send Report</a>"; 
	echo "&nbsp;&nbsp;";
	echo "<a href='filenext.php?path=$rpath&amp;r_id=$r_id&amp;code=2&amp;cc_id=$cc_id'>Edit Report</a>"; 
	echo "&nbsp;&nbsp;";
	echo "<a href='filenext.php?path=$rpath&amp;r_id=$r_id&amp;code=3&amp;cc_id=$cc_id'>Replay of  Report</a>"; 
	echo "&nbsp;&nbsp;";
	
	?>
	<!--
	<form name="msg" method="post" action="filenext.php">
	
	<input type="radio" name="redio"  value="send report"> send report</input>
	<input type="radio" name="redio"  value="edit report"> edit report</input>
	<input type="radio" name="redio"  value="replay report"/> replay of report</input>
	<input type="text" name="path" value="<?php// echo $rpath;?>"/>
	
	<br/>
	<input type="submit" name="submit" value="submit"/>
		<input type="reset" name="reset" value="reset"/>
	</form>-->
	</td>
	</tr>
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
