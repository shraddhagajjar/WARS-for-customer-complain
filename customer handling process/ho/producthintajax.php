
<html>
<head>
<link rel="stylesheet" type="text/css" href="ho.css" />
<title>
</title>
</head>
<body>


<table width="90%" align="center" cellpadding="10" cellspacing="5" border="0">
	<tr>
	<td width="100%" align="center">	
	<table border="1" width="" cellpadding="10" cellspacing="5" width="100%" class="c">
	<tr>
		<th colspan="3"><font color="#000000" size="+3"> Product Details </font></th>
	</tr>
		<?php
		
	$q=$_GET["q"];
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$sql1="SELECT * FROM `productdetail` WHERE `product_no` = '$q';";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$c=$row['product_no'];
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
	<a href="">Delete </a>
		<br/>	
	<a href="">Update </a>
	<?php
	}
	mysql_close($con);
	?>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>

</body>
</html>
