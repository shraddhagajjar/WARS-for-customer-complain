<html>
<head>
<title>:: TL Home Customer Complain</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>
<body>

<table width="80%" align="center" cellpadding="5" cellspacing="5" border="2" class="c">
	<tr>
		<td align="center" width="100%" valign="top">
			<table width="90%" align="center" cellpadding="10" cellspacing="5">
			<tr><td align="left"><!--<marquee behavior="alternate">--><font size="6px"><b>Complain News</b></font><!--</marquee>--></td>
				</tr>
				<tr>
					<td>
		<?php 
						
		$uname = $_SESSION['uname'];
		$teamno = $_SESSION['teamno'];
//		echo $teamno;
//		echo $uname;
		echo "<br/>";
				$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=0;
		$sql1="SELECT * FROM `ccregister` WHERE tl_status = $teamno AND er_status = 0;";
		
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{ 	
			//echo $row['cc_id'];
			//echo "<br/>";
			$i++;
		}
		echo "<font size=5px>Total Unread Complain :  ".$i; ?>
		 <a href="hocc.php">View Complian</a></font>
		

					</td>
				</tr>
			</table>
			
		</td>
		</tr>
		
		<tr>
		<td align="center" width="100%" valign="Top">
			<table width="90%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
			<tr>
				<td align="left"><font size="6px"><b>Ho Message News</b></font></td>
			</tr>	
			<tr>
				<td>
				<br/>
				<?php				
				
		$uname = $_SESSION['uname'];
		$e_no = $_SESSION['teamno'];
		$i=0;
		$sql1="SELECT * FROM `cchp`.`reportingdetail` WHERE `teamno` = $e_no AND `h_cr` = 1";
		
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{ 	
			//echo $row['cc_id'];
			//echo "<br/>";
			$i++;
		}
		echo "<font size=5px>Message :  ".$i; ?>
		
		 <a href="message.php" >View Message</a>

					</td>
				</tr>
			</table>
			<?php
			 if(@$_POST['message'])
				{
					echo "<script>alert('Editing done succfully');   </script>";
				}
			?>
	</td>
	</tr>	
	
	
		<tr>
		
		<td align="center" width="100%" valign="top">
			<table width="90%" align="center" cellpadding="10" cellspacing="5">
			<tr><td align="left"><!--<marquee behavior="alternate">--><font size="6px"><b>Reporting News</b></font><!--</marquee>--></td>
				</tr>
				<tr>
					<td>
		<?php 
						
		$uname = $_SESSION['uname'];
		$teamno = $_SESSION['teamno'];
		//echo $teamno;
		//echo "<br/>";
		//echo $uname;
		//echo "<br/>";
		$i=0;
		$sql1="SELECT * FROM `ccregister` WHERE tl_status = $teamno AND c_status = 1 AND t_status = 0";
		
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{ 	
			//echo $row['cc_id'];
			//echo "<br/>";
			$i++;
		}
		echo "<font size=5px>Total Unchecked Reporting :  ".$i; ?>
		
		 <a href="reporting.php">View Reporting</a></font>
		

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
