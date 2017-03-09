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
<title>HO Product Handle Site</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
		<link rel="icon" type="image/ico" href="../image/favicon.ico">
</head>

<body   background="image/bg.jpg">
<center>
<div id="header">

 		<?php include 'hoheder.php'; ?>
</div>
<div id="mainbody" >
	<br/>
	<br/>
<table width="90%" align="center" cellpadding="10" cellspacing="5" border="0" class="c">
	<tr>
	<td width="100%" align="center">	
	<table border="1" width="" cellpadding="10" cellspacing="5" class="c">
		<?php
		
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$sql1="SELECT * FROM `productdetail`";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$c=$row['product_no'];
			if($i%2!=0)
			{
		?>
	<tr><td>	
	
		<?php 
			echo "<br/>";
			$path= $row["pipath"]; 
			 echo '<img src="'.$path.'" alt="random image" width ="100%">'."&nbsp;&nbsp;";
		 
		?>
	</td>
	<td valign="top">
	
	<?php
	
			echo "Product No : " .$c;
			echo "<br/>";
			echo "<br/>";
			echo "Product Name : ".$row['p_name'];
			echo "<br/>";			echo "<br/>";
			echo "Prodcut Price : ".$row['price'];
			echo "<br/>";			echo "<br/>";
			echo "Product Feature : ".$row['feature'];
			echo "<br/>";			echo "<br/>";
			echo "Product Review :".$row['review'];
	?> 
	</td>
	<td valign="middle">
	<?php echo "<a href='deleteproduct.php?product_no=$c'>Delete</a>"; ?>
	<br/>
	<?php echo "<a href='editproduct.php?product_no=$c'>Update</a>"; ?>
	</td>
	</tr>
	
	
	<?php
	}
	else
	{
		?>
	
	<tr>
	<td>	
	<?php 
			echo "<br/>";
			$path= $row["pipath"]; 
			 echo '<img src="'.$path.'" alt="random image" width ="100%">'."&nbsp;&nbsp;";
		 
		?>
	</td>
	<td valign="top">
	
	<?php
	
			echo "Product No : " .$c;
			echo "<br/>";
			echo "<br/>";
			echo "Product Name : ".$row['p_name'];
			echo "<br/>";			echo "<br/>";
			echo "Prodcut Price : ".$row['price'];
			echo "<br/>";			echo "<br/>";
			echo "Product Feature : ".$row['feature'];
			echo "<br/>";			echo "<br/>";
			echo "Product Review :".$row['review'];
	?> 
	</td>
	<td valign="middle">
	
	<?php echo "<a href='deleteproduct.php?product_no=$c'>Delete</a>"; ?>
	<br/>
	<?php echo "<a href='editproduct.php?product_no=$c'>Update</a>"; ?>
	</td>
	</tr>
	<?php
		}
	$i++;
	}
?>	
	</table>
	
	</td>
	</tr>
	<tr>
	<td>&nbsp;
	
	</td>
	</tr>
</table>
<br>
</br>
</div>

<div id="footer">
<br/>
<br/>
 		<?php include 'hofooter.php'; ?>
</div>
</center>
</body>
</html>
