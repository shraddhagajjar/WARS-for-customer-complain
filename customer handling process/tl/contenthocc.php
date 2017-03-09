<html>
<head>
<title>:: HO Customer Complain Site::</title>
	<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>
	<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
	<tr>
		<th colspan="4"><!--<marquee behavior="alternate">--><font color="#000000" size="+3">Customer Complain List </font><!--</marquee>--></th>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	<tr bgcolor="#A4A4A4">
		<th width="20%" align="left">Complain No</th>
		<th width="30%" align="left">Customer Name</th>
		<th width="20%" align="left">Complain Date</th> 
		<th width="30%" align="left">View Details</th>
	</tr>

	<?php
	
		$uname = $_SESSION['uname'];
		$teamno = $_SESSION['teamno'];
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$l=0;
		$sql1="SELECT * FROM `ccregister` WHERE tl_status = $teamno AND er_status = 0;";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
		
			$c=$row['cc_id'];
			if($i%2!=0)
			{
		?>		
		
	<tr bgcolor="#F2F2F2">
	<td ><?php echo $c ?></td>
	<td><?php echo $row['c_name']; ?></td>
	<td><?php echo $row['c_date']; ?></td>
	<td><a href="ccdetails.php?cc=<?php echo $c; ?>" >View Details</a></td>
	
	</tr>
	<?php
	
			}
			else
			{
			?>
		
	<tr bgcolor="#E6E6E6">
	<td ><?php echo $c ?></td>
	<td><?php echo $row['c_name']; ?></td>
	<td><?php echo $row['c_date']; ?></td>
	<td><a href="ccdetails.php?cc=<?php echo $c; ?>" >View Details</a></td>
	
	</tr>	
			<?php
			
			}
			$i++;	
	}
	
	?>
</table>

</body>
</html>
