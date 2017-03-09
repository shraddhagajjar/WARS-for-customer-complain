<html>
<head>
<title>:: Er Site OF CnC ::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>
<body >
<table width="80%" align="center" cellpadding="5" cellspacing="5" border="2" class="c">
	<tr>
		<td align="center" width="100%" valign="top">
			<table width="90%" align="center" cellpadding="10" cellspacing="5">
			<tr>
			<td><font size="6px"><b>Complain:&nbsp;</b></font>
			
<!--				<caption><marquee behavior="alternate"></maquee></caption>-->
						<?php 
						
		$uname = $_SESSION['uname'];
		$e_no = $_SESSION['e_no'];
		//echo $e_no;	
		//echo "<br/>";
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=0;
		$s=0;
		$c=1;
		//echo $c;
		$sql1="SELECT * FROM `ccregister` WHERE er_status = $e_no AND c_status = 0;";
		
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
	
		<tr>
		<td align="center" width="100%" valign="Top">
		<table width="90%" align="center" cellpadding="10" cellspacing="5">
			<tr>
			<td><font size="6px">
						<b>Team Leader News</b></font>
			<?php
			
		$uname = $_SESSION['uname'];
		$e_no = $_SESSION['e_no'];
		$i=0;
		$sql1="SELECT * FROM `cchp`.`reportingdetail` WHERE `er_no` = $e_no AND `t_cr` = 1";
		
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{ 	
			//echo $row['cc_id'];
			//echo "<br/>";
			$i++;
		}
		echo "<font size=5px>Message :  ".$i; ?>
		
		 <a href="message.php">View Message</a></font>
		
</td>
			</tr>
			</table>
		</td>
		</tr>
</table>
<br/>
<br/>
</body>
</html>
