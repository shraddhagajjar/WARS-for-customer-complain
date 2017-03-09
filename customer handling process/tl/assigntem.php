

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
<title>:: HOCustomer Complain Details Site::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>

<body  background="image/bg.jpg" >
<center>
<div id="header">
 		<?php include 'tlheder.php'; ?>
</div>

<div id="mainbody">
	<br/>
	<br/>
	<table width="95%" align="center" cellpadding="10" cellspacing="5" border="1" class="c">
		<tr>
			<td width="100%" align="center">
			<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
			<tr>
				<th colspan="4"><!--<marquee behavior="alternate">--><font color="#000000" size="+3">Team List For Customer Location</font><!--</marquee>--></th>
			</tr>
			<tr>
				<td colspan="4">&nbsp;</td>
			</tr>
	
		<form action="" method="post">
			<tr>
				<th colspan="4">
				<?php  
					$t="";
					$h="";
			$complain=$_GET['complain'];
			
			echo " Assign Team For Complain No is ".$complain;?>
				</th>
			</tr>
			<tr bgcolor="#A4A4A4" >
	
				<th align="left" width="20%"> Team No</th>
				<th align="left" width="25%">Name</th>
				<th align="left" width="25%">Work</th>	
				<th align="left" width="30%">Assign</th>
			</tr>
			<?php
				$location=$_GET['location'];
				$uname = $_SESSION['uname'];
				$teamno = $_SESSION['teamno'];
				//echo $location;
				//echo $complain;
				echo "<br/>";
				$con = mysql_connect("localhost","root","");
				if(!$con)
				{
					die("coude not correct");
				}
				mysql_select_db("cchp", $con);
				$i=1;
				$sql1="SELECT * FROM `engineerdetail` WHERE teamno =".$teamno;;
				$result=mysql_query($sql1,$con);
				while($row=mysql_fetch_array($result))
				{ 	
					if($i%2!=0)
					{

			?>
			<tr bgcolor="#F2F2F2">
				<td><?php $erno = $row['e_no']; echo $erno;?> </td>
				<td><?php echo $row['name'];
					$ername = $row['username'];		?>
				 </td>
				<td><a href="#">View Load</a> </td>
				<td><input type="radio" name="redio"  value="<?php echo $erno; ?>"><?php echo $ername;?> </input> </td></tr>
				<?php
					}
					else
					{	
					?>
			<tr bgcolor="#E6E6E6"> 		
				<td><?php $erno = $row['e_no']; echo $erno;?> </td>
				<td><?php 
					echo $row['name'];
					$ername = $row['username'];	
					?> 
				</td>
				<td><a href="#">View Load</a> </td>
				<td><input type="radio" name="redio"  value="<?php echo $erno; ?>"><?php echo $ername;?> </input> </td></tr>
				<?php
				}
				
			$i++;
			}
			
			?>
			<tr  bgcolor="#E6E6E6"><td colspan="4" align="right"><input type="submit" name="submit" value="  submit  "/></td></tr>
	
				
</table>
		</form >
	</td>
	</tr>	
	<tr>
	<td><?php
	if(isset($_POST['submit']))
	{
	
	$selec = $_POST['redio'];
//	echo $complain;
	echo "<br/> <br/>";
		echo "This Complain work under Team  ".$uname."<br/> <br/>";		
		//For Set Complain ER...	
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		//Query For Set Complian no with er_Status..
		$sql2="UPDATE  `cchp`.`ccregister` SET  `er_status` =  '" . $selec ."' WHERE  `ccregister`.`cc_id` = ".$complain;
		
		if(!mysql_query($sql2))
		{
  			die('Errormmm: ' . mysql_error());
  		}
		else
		{
		echo "This Complain work under engineer  ".$selec." succfully<br/> <br/>";
		}
		//Query For Set Complian no with To_Status
		
		
	}
mysql_close($con);	

?></td>
	</tr>
</table>
</br>
</br>
</div>


<div id="footer">
<br/>
<br/>
 		<?php include 'tlfooter.php'; ?>
</div>
</center>
</body>
</html>
