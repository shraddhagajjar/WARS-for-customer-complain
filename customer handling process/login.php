
<html>
<head>

<title>login</title>
<link rel="stylesheet" type="text/css" href="ccms.css" />
<?php
session_start();
if(isset($_POST['submit']))
{

	$name=$_POST['name'];
	$password=$_POST['password'];
	$type=$_POST['ltype'];
	
//	For Ho LOGIN
	if($type==1)
	{
		$_SESSION['uname'] = $name;
		$_SESSION['pword'] = $password;
		$con = mysql_connect("localhost","root");
		if(!$con)
		{
			die("coude not correct");
		}
mysql_select_db("cchp",$con);
$sql="SELECT * 
FROM `hodetail`";
$s=0;
$result=mysql_query($sql,$con);

	while($now=mysql_fetch_array($result))
	{
	$a=$now['username'];
	$b=$now['password'];
		if(($a == $_SESSION['uname']) && ($b == $_SESSION['pword']))
		{
			$s=1;
			
		}	
	}

	if($s==1)
	{
	
	header("location:ho/index.php");exit;		
	}
			
	else
	{
		echo "<script>alert('Username And Password Are not Correct Try Again Later');   window.location.href='loginfinal.php';</script>";
	}
	
	}
	
//For Team Leder Login	
	else if($type==2)
	{
		$_SESSION['uname'] = $name;
		$_SESSION['pword'] = $password;
		$con = mysql_connect("localhost","root");
		if(!$con)
		{
			die("coude not correct");
		}
mysql_select_db("cchp",$con);
$sql="SELECT * 
FROM `teamdetail`";
$s=0;
$result=mysql_query($sql,$con);

	while($now=mysql_fetch_array($result))
	{
	$a=$now['username'];
	$b=$now['password'];
	
		if(($a == $_SESSION['uname']) && ($b == $_SESSION['pword']) )
		{
		
			$c=$now['teamno'];
			$_SESSION['teamno']=$c;
			$s=1;
		}	
	}

	if($s==1)
	{
		header("location:tl/index.php");exit;		
	}
			
	else
	{
		echo "<script>alert('Username And Password Are not Correct Try Again Later');   window.location.href='loginfinal.php';</script>";
	}

	}
	
//For Enigneer Login	
	else if($type==3)
	{
		$_SESSION['uname'] = $name;
		$_SESSION['pword'] = $password;
		$con = mysql_connect("localhost","root");
		if(!$con)
		{
			die("coude not correct");
		}
mysql_select_db("cchp",$con);
$sql="SELECT * 
FROM `engineerdetail`";
$s=0;
$result=mysql_query($sql,$con);

	while($now=mysql_fetch_array($result))
	{
	$a=$now['username'];
	$b=$now['password'];
		if(($a == $_SESSION['uname']) && ($b == $_SESSION['pword']))
		{
		
			$c=$now['e_no'];
			$_SESSION['e_no']=$c;
			$s=1;
		}	
	}

	if($s==1)
	{
		header("location:er/index.php");exit;		
	}
	
			
	else
	{
		echo "<script>alert('Username And Password Are not Correct Try Again Later');   window.location.href='loginfinal.php';</script>";
	}

	}
	
//For Phone Operator Login
	elseif($type==4)
	{
	
		$_SESSION['uname'] = $name;
		$_SESSION['pword'] = $password;
		$con = mysql_connect("localhost","root");
		if(!$con)
		{
			die("coude not correct");
		}
mysql_select_db("cchp",$con);
$sql="SELECT * 
FROM `phoneoperator`";
$s=0;
$result=mysql_query($sql,$con);

	while($now=mysql_fetch_array($result))
	{
	$a=$now['username'];
	$b=$now['password'];
		if(($a == $_SESSION['uname']) && ($b == $_SESSION['pword']))
		{
		
			$c=$now['p_id'];
			$_SESSION['p_id']=$c;
			$s=1;
		}	
	}

	if($s==1)
	{
		header("location:pho/index.php");exit;		
	}
	
	
	}
	else
	{
			echo "<script>alert('Select Type of User');   window.location.href='loginfinal.php';</script>";
	}
	
}	

?>
</head>

<body>

<br/>


<form action="" name="login" method="post">

	<table align="right" cellpadding="5" cellspacing="5" border="0" class="c" width="" class="cc">
	
<tr>
	<td colspan="2" align="right"></td>
</tr>
	<tr>
		<td width="50%" align="right"><b>Name :</b> </td>
		<td width="50%" align="left"><input type="text" name="name" size="30" /></td>
	</tr>
	<tr>
		<td width="50%" align="right"><b>Password :</b> </td>
		<td width="50%" align="left"><input type="password" name="password"  size="30"/></td>
	</tr>
	<tr>
		<td width="50%" align="right"><b>Select Type :</b> </td>
		<td width="50%" align="left">
			<select name="ltype" title="-- Select Your Login Type --"  >
					<option> -- Select Your Login Type -- </option>
					<option value="1">Head Distributer</option>
					<option value="2">Team Leader</option>
					<option value="3">Engineer</option>
					<option value="4">Phone operator</option>
			</select></td>
	</tr>
	<tr>
	</tr>
		<td colspan="2">
		</td>
	<tr>
		<td colspan="2">
		</td>
	</tr>
	<tr>	
		<td colspan="2" align="right">
		
       <input type="submit" class="sss" name="submit" title="Click To Login"  value="Login"  style="text-decoration:none;display: inline-block; width:auto" />
		<!--	<input type="submit" name="submit" title="Click To Login"   class="button_example" style="text-decoration:none;display: inline-block; color:#666666; width:20%" value="Go Inside"/>-->
		</td>
	</tr>
	</table>
</form>

</body>
</html>
