<html>
<head>
<title>HO Product Handle Site</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
		<link rel="icon" type="image/ico" href="../image/favicon.ico">
</head>

<body >
<center>
<br/>
<table width="90%" align="center" cellpadding="10" cellspacing="5" border="0" class="cc">
	<tr>
		<td align="center">
			<font color="#333333" size="+3"><b>Provide Service on Product</b></font>
				<br/>	
		</td>
	</tr>
	<tr>
	<td width="100%" align="center">	
	<table border="0" width="" cellpadding="10" cellspacing="5" class="c" border="0">
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
	<tr>
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
	<td valign="top">	
	
		<?php 
			echo "<br/>";
			$path= $row["pipath"]; 
			$rpath = substr("$path",3);
			//echo $rpath;
			 echo '<img src="'.$rpath.'" alt="random image" width ="80%">'."&nbsp;&nbsp;";
		 
			echo "<br/>";			echo "<br/>";
			echo "<a href='ccm.php'>Complain</a>";
		?>
	</td>
	</tr>
	
	
	<?php
	}
	else
	{
		?>
	
	<tr>
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
	
	<td valign="top">	
	<?php 
	
			echo "<br/>";
			$path= $row["pipath"]; 
			$rpath = substr("$path",3);
			//echo $rpath;
			 echo '<img src="'.$rpath.'" alt="random image" width ="80%">'."&nbsp;&nbsp;";
			 
			echo "<br/>";			echo "<br/>";
			echo "<a href='ccm.php'>Complian</a>";
		?>
	</td>
	</tr>
	<?php
	}
	?>
<tr>
	<td>
	......................................................................
	</td>
	<td>
	....................
	</td>
</tr>
	<?php
	
	$i++;
	}
?>	
	</table>

	</td>
	</tr>
</table>

			<?php 
			//$l ="proimage/samsung-galaxy3.jpeg";
			 //echo '<img src="'.$l.'" alt="random image" width ="">'."&nbsp;&nbsp;"; ?>
</center>
</body>
</html>
