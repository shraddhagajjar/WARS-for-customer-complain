
<html>
<head>

<title>
</title>
</head>
<body>
	<?php
	$q=$_GET["q"];
	//echo $q;

		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$sql1="SELECT * FROM `teamdetail` WHERE location = $q ;";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			
			
		?>		
		
<select name="text_teamno" id="text_teamno">

<option value="">Select A Location  :</option>
							    <option value="<?php echo $row['teamno'];?>"><?php echo $row['name'];?></option>
</select>
<?php
} 	
mysql_close($con);
		?>
	
</table>


</body>
</html>
