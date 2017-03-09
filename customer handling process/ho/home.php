<html>
<head>
<title>:: HO Home Customer Complain</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>
<body >
<table width="80%" align="center" cellpadding="5" cellspacing="5" border="2" class="c">
	<tr>
		<td align="center" width="100%" valign="top">
			<table width="90%" align="center" cellpadding="10" cellspacing="5">
			<tr>
			<td><font size="6px"><b>Complain News</b></font></td>
			</tr>
<!--				<caption><marquee behavior="alternate"></maquee></caption>-->
				<tr>
					<td>
						<?php 
						
		$uname = $_SESSION['uname'];
		//echo "<br/>";
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=0;
		$c=1;
		//echo $c;
		$sql1="SELECT * FROM `ccregister` WHERE ho_status = ".$c;
		
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{ 	
			//echo $row['cc_id'];
			//echo "<br/>";
			$i++;
		}
		echo "<font size=5px>Total Unread Complain is  ".$i; ?>
		 <a href="hocc.php">View Complian</a></font>
		
					</td>
				</tr>
			</table>
			
		</td>
		</tr>
	<!--
		<tr>
		<td align="center" width="100%" valign="Top">
		<table width="90%" align="center" cellpadding="10" cellspacing="5">
			<tr>
			<td><font size="6px"><b>Team News</b></font></td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		
		<td align="Center" width="100%" valign="bottom">
		<table width="90%" align="center" cellpadding="10" cellspacing="5">
			<tr>
			<td><font size="6px"><b>Engineer News</b></font></td>
			</tr>
			</table>
		</td>
		-->
	</tr>	
	
		<tr>
		<td align="center" width="100%" valign="top">
					<table width="90%" align="center" cellpadding="10" cellspacing="5">
			<tr>
			<td><font size="6px"><b>Reporting News</b></font>
			
		<?php 
		echo "<br/>";
		echo "<br/>";
		$uname = $_SESSION['uname'];
		//echo $teamno;
		//echo "<br/>";
		//echo $uname;
		//echo "<br/>";
		$i=0;
		$sql1="SELECT * FROM `ccregister` WHERE  c_status = 1 AND t_status = 1 AND h_status = 0 ";
		
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{ 	
			//echo $row['cc_id'];
			//echo "<br/>";
			$i++;
		}
		echo "<font size=5px>Total Unchecked Reporting :  ".$i; ?>
		
		 <a href="hreporting.php">View Reporting</a></font>
		
			</td>
			</tr>
			</table>

		</td>
		
	</tr>	
	</tr>
</table>
<br/>
<br/>
</body>
</html>
