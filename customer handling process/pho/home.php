<html>
<head>
<title>:: Er Site OF CnC ::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>
<body >
<br/>

<table width="95%" align="center" cellpadding="10" cellspacing="5" border="1" class="c">
<tr>
	<td align="center">		<font color="#333333" size="+3"><b>Search Complain </b></font></td>
</tr>
	<tr>
	<td width="100%" align="center">
	
	<?php
		include "ccajax.php";
	?>
	</td>
	</tr>	
	<tr>
	<td>
	<table width = "100%" cellpadding="10" cellspacing="5" align="center" class="c">
		<tr>
			<td align="center" colspan="4"><font color="#333333" size="+3"><b> Total  Compalin Registered By You</b></font></td>
		</tr>	
		<tr>
			<td colspan="4"></td>
		</tr>
		<tr bgcolor="#A4A4A4">
		<th width="20%" align="left">Complain No</th>
		<th width="30%" align="left">Customer Name</th>
		<th width="20%" align="left">Complain Date</th> 
		<th width="30%" align="left">Query</th>
	</tr>

	<?php
	
		$p_id=$_SESSION['p_id'];
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$l=0;
		$sql1="SELECT * FROM `ccregister` WHERE regi_id = $p_id";
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
	<td><?php echo $row['query']; ?></td>
	
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
	<td><?php echo $row['query']; ?></td>
	
	</tr>	
			<?php
			
			}
			$i++;	
	}
	?>

	</table>
	</td>
	</tr>
</table>
<br/>
</body>
</html>
