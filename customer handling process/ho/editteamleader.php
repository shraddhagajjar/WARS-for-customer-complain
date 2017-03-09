
<?php
 $con=mysql_connect("localhost","root","");
 mysql_select_db("cchp",$con);
 @$z=$_POST['text_pid'];
 @$a=$_POST['text_name'];
 @$b=$_POST['text_address'];
 @$c=$_POST['text_location'];
 @$d=$_POST['text_mobile'];
 @$e=$_POST['text_email'];
 @$f=$_POST['text_user'];
 @$g=$_POST['text_pass'];
 @$h=$_POST['text_repass'];
 $i=date("Y-m-d");
 if(@$_POST['insert'])
 {

$sql1 ="UPDATE  `cchp`.`teamdetail` SET  `name` =  '$a',
`address` =  '$b',
`location` =  '$c',
`p_no` =  '$d',
`e_id` =  '$e',
`username` =  '$f',
`password` =  '$g' WHERE  `teamdetail`.`teamno` = '$z' ;"; 

	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('Team Leder Edited Sucefully');   window.location.href='vtl.php';</script>";
	

	}
	 
 }
 mysql_close($con);	
?>


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
<title>Ho Edit Team Leder</title>
	<link rel="stylesheet" type="text/css" href="ho.css" />
	<link rel="icon" type="image/ico" href="../image/favicon.ico">		
	<script language="javascript" type="text/javascript">
     function validate()
     {
     if(document.getElementById("text_name").value=="")
     {
         alert("Please Enter Your Name");
         document.getElementById("text_name").focus();
         return false;
     }
     if(!(isNaN(document.validation.text_name.value)))
     {
         alert("Name has character only!");
         return false;
     }
	 if(document.getElementById("text_address").value=="")
	 {
	 	 alert("Please Enter Address");
         document.getElementById("text_address").focus();
         return false;
	 }
	 if(document.getElementById("text_address").value=="")
	 {
	 	 alert("Please Enter Address");
         document.getElementById("text_address").focus();
         return false;
	 }
     if(document.getElementById("text_location").value=="")
     {
         alert("Please Enter Your location");
         document.getElementById("text_location").focus();
         return false;
     }
	
     if((isNaN(document.validation.text_mobile.value)))
     {
         alert("Mobile has numeric only!");
         return false;
     }
     var emailPat=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
     var emailid=document.getElementById("text_email").value;
     var matchArray = emailid.match(emailPat);
     if (matchArray == null)
     {
         alert("Your email address is wrong. Please try again.");
         document.getElementById("text_email").focus();
         return false;
     }
     if(document.getElementById("text_user").value=="")
     {
         alert("Please Enter User Name");
         document.getElementById("text_user").focus();
         return false;
     }
     if(document.getElementById("text_pass").value=="")
     {
         alert("Please Enter Your Password");
         document.getElementById("text_pass").focus();
         return false;
     }
     if(document.getElementById("text_repass").value=="")
     {
         alert("Please ReEnter Your Password");
         document.getElementById("text_repass").focus();
         return false;
     }
     if(document.getElementById("text_repass").value!="")
     {
           if(document.getElementById("text_repass").value != document.getElementById("text_pass").value)
           {
                alert("Confirm Password doesnot match!");
                document.getElementById("text_repass").focus();
                return false;
           }
     }
     return true;
 }
 </script>    

</head>


<body   background="image/bg.jpg">
<center>
 <div id="header">
 		<?php include 'hoheder.php'; ?>
</div>
<div id="mainbody">
	<br/>
	<br/>
	
   <form name="validation" method="post" onSubmit="return validate();">
  
<table cellpadding="10"  cellspacing="5" class="c" width="95%" align="center" border="1">


<tr>
<td>
         
     <table border="0" class="c"  align="center" cellpadding="5"  cellspacing="5" width="100%">
	 
	 <tr>
		<th colspan="2"><!--<marquee behavior="alternate">--><font color="#000000" size="+3">Update Team Leader Detail </font></th>
	</tr>
	<tr><td colspan="5">&nbsp;</td></tr>
		<?php 
			$teamno = $_GET['teamno'];		
		$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$sql1="SELECT * FROM `cchp`.`teamdetail` WHERE `teamdetail`.`teamno` = $teamno;";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
		?>
	 <tr bgcolor="#A4A4A4">
	 	<th colspan="2" align="center">Edit Phone Operator </th>
	 </tr>
	 <tr bgcolor="#F2F2F2">
	 	<td colspan="2">&nbsp;</td>
	 </tr>
		 <tr bgcolor="#E6E6E6">
         <td width="50%"  align="right" >Name : </td>
     	<td width="50%"><label>
		<input type="hidden" name="text_pid" id="text_pid" value="<?php echo $teamno; ?>" />
       <input name="text_name" type="text" id="text_name" /><?php echo $row['name']; ?>
    	 </label></td>
   	</tr>
  	<tr bgcolor="#F2F2F2">
         <td width="50%" align="right">Address : </td>
     	<td width="50%"><label>
       	<input name="text_address" type="text" id="text_address" /><?php echo $row['address']; ?>
     </label></td>
   </tr>
   <tr bgcolor="#E6E6E6">
         <td width="50%" align="right">Location : </td>
     <td width="50%"><label>
       
<select name="text_location" onChange="text_location">

<option value="">Select A Location  :</option>
										<?php
								
								$sql3="SELECT * 
								FROM `location`" ;
								$result3=mysql_query($sql3,$con);
								while($row1=mysql_fetch_array($result3))
						{?>
							    <option value="<?php echo $row1['loca_id'];?>"><?php echo $row1['loca_name'];?></option>
 
						<?php } ?>  
			
							</select>
		<?php echo $row['location']; ?>
     </label></td>
   </tr>
   
   <tr bgcolor="#F2F2F2">
     <td width="50%" align="right" >Phone/Mobile : </td>
     <td width="50%" ><label>
       <input name="text_mobile" type="text" id="text_mobile" />
	   <?php echo $row['p_no']; ?>
     </label></td>
   </tr>
   <tr bgcolor="#E6E6E6">
     <td width="50%" align="right" >Email address : </td>
     <td width="50%"><label>
       <input name="text_email" type="text" id="text_email"  />
	   <?php echo $row['e_id']; ?>
     </label></td>
   </tr>
   <tr bgcolor="#F2F2F2">
     <td width="50%" align="right" >User Name : </td>
     <td width="50%"><label>
       <input name="text_user" type="text" id="text_user" />
	   <?php echo $row['username']; ?>
     </label></td>
   </tr>
   <?php
   }
   ?>
   <tr bgcolor="#E6E6E6">
     <td width="50%" align="right" >Password : </td>
     <td width="50%"><label>
       <input name="text_pass" type="password" id="text_pass" />
     </label></td>
   </tr>
   <tr bgcolor="#F2F2F2">
     <td width="50%" align="right" >Confirm Password : </td>
     <td width="50%"><label>
       <input name="text_repass" type="password" id="text_repass" />
     </label></td>
   </tr>
   <tr  bgcolor="#E6E6E6" >
     <td   colspan="2" align="center"><label>
       <input type="submit" name="insert" value="SUBMIT"  style="text-decoration:none;display: inline-block;  height:auto width:20%" />
     </label></td>
     </tr>
 </table>
 </td>
 </tr>
 <tr>
 <td>
 </td>
 </tr>
</table>  
 </form>

<br/>
<br/>
</div>

<div id="footer">
<br/>
<br/>
 		<?php include 'hofooter.php'; ?>
</div>
</center>

</body>
</html>

