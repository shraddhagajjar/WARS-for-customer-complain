<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

<?php

 $con=mysql_connect("localhost","root","");
 mysql_select_db("cchp",$con);
 @$j=$_POST['text_teamno'];
// echo $j;
 @$a=$_POST['text_name'];
 @$b=$_POST['text_address'];
 @$c=$_POST['users'];
 @$d=$_POST['text_mobile'];
 @$e=$_POST['text_email'];
 @$f=$_POST['text_user'];
 @$g=$_POST['text_pass'];
 @$h=$_POST['text_repass'];
 @$z=$_POST['text_eno'];
 $i=date("Y-m-d");
 if(@$_POST['insert'])
 {
 
 if($c=="")
 {
 	 echo "<script> alert('Please Select Location');
         document.getElementById('text_users').focus(); </script>";
        
 }
 else if($a=="")
 {
 	 echo "<script> alert('Please Enter Engineer name');
         document.getElementById('text_name').focus(); </script>";
    
 }
 else if($b == "")
 {
 	 echo "<script> alert('Please Enter Address');
         document.getElementById('text_address').focus(); </script>";
    
 }
 else if($d=="")
 {
 	 echo "<script> alert('Please Enter mobile number');
         document.getElementById('text_moblie').focus(); </script>";
    
 }
 else if($e=="")
 {
 	 echo "<script> alert('Please Enter email id');
         document.getElementById('text_email').focus(); </script>";
    
 }
 
 else if($f=="")
 {
 	 echo "<script> alert('Please Enter user name');
         document.getElementById('text_user').focus(); </script>";
    
 }
 
 else if($g=="")
 {
 	 echo "<script> alert('Please Enter password');
         document.getElementById('text_pass').focus(); </script>";
    
 }
 
 else if($h=="")
 {
 	 echo "<script> alert('Please Re enter password');
         document.getElementById('text_repass').focus(); </script>";
    
 }
 else
 {
 
 $sql2= "UPDATE  `cchp`.`engineerdetail` SET  `teamno` =  '$j',
`name` =  '$a',
`address` =  '$b',
`location` =  '$c',
`p_no` =  '$d',
`e_id` =  '$e',
`username` =  '$f',
`password` =  '$g' WHERE  `engineerdetail`.`e_no` = $z ";



	if(!mysql_query($sql2,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('Engineer Updation Done Successfully');   window.location.href='vel.php';</script>";
	}
	 
 }
}
?>

<html>
<head>
<title>HO Edit Engineer</title>
	<link rel="stylesheet" type="text/css" href="ho.css" />

	<link rel="icon" type="image/ico" href="../image/favicon.ico">
<script language="javascript" type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","hintajaxfordd.php?q="+str,true);
xmlhttp.send();
}
</script>	
<script language="javascript" type="text/javascript">
//     function validate()
//     {
//	 
//     if(document.getElementById("text_teamno").value=="")
//     {
//         alert("Please Enter teamno");
//         document.getElementById("text_teamno").focus();
//         return false;
//     }
//     if(document.getElementById("text_name").value=="")
//     {
//         alert("Please Enter Your Name");
//         document.getElementById("text_name").focus();
//         return false;
//     }
//     if(!(isNaN(document.validation.text_name.value)))
//     {
//         alert("Name has character only!");
//         return false;
//     }
//	 if(document.getElementById("text_address").value=="")
//	 {
//	 	 alert("Please Enter Address");
//         document.getElementById("text_address").focus();
//         return false;
//	 }
//	 if(document.getElementById("text_address").value=="")
//	 {
//	 	 alert("Please Enter Address");
//         document.getElementById("text_address").focus();
//         return false;
//	 }
//     if(document.getElementById("text_location").value=="")
//     {
//         alert("Please Enter Your location");
//         document.getElementById("text_location").focus();
//         return false;
//     }
//	
//     if((isNaN(document.validation.text_mobile.value)))
//     {
//         alert("Mobile has numeric only!");
//         return false;
//     }
//     var emailPat=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
//     var emailid=document.getElementById("text_email").value;
//     var matchArray = emailid.match(emailPat);
//     if (matchArray == null)
//     {
//         alert("Your email address is wrong. Please try again.");
//         document.getElementById("text_email").focus();
//         return false;
//     }
//     if(document.getElementById("text_user").value=="")
//     {
//         alert("Please Enter User Name");
//         document.getElementById("text_user").focus();
//         return false;
//     }
//     if(document.getElementById("text_pass").value=="")
//     {
//         alert("Please Enter Your Password");
//         document.getElementById("text_pass").focus();
//         return false;
//     }
//     if(document.getElementById("text_repass").value=="")
//     {
//         alert("Please ReEnter Your Password");
//         document.getElementById("text_repass").focus();
//         return false;
//     }
//     if(document.getElementById("text_repass").value!="")
//     {
//           if(document.getElementById("text_repass").value != document.getElementById("text_pass").value)
//           {
//                alert("Confirm Password doesnot match!");
//                document.getElementById("text_repass").focus();
//                return false;
//           }
//     }
//     return true;
// }
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

		<?php 
		$e_no = $_GET['e_no'];
								$con = mysql_connect("localhost","root");
								if(!$con)
								{
									die("coude not correct");
								}
								mysql_select_db("cchp",$con);
								
								$sql1="SELECT * 
								FROM `engineerdetail` WHERE `e_no` = '$e_no';";
								$result1=mysql_query($sql1,$con);
								while($row=mysql_fetch_array($result1))
								{
		?>
<form name="validation" method="post" onSubmit="return validate();">
    <table border="1" class="c"  align="center" cellpadding="10"  cellspacing="5" width="90%">
	<tr>
	<td>
    <table border="0" class="c"  align="center" cellpadding="10"  cellspacing="5" width="100%">
		 <tr>
			<th colspan="2"><font color="#000000" size="+3">Engineer List </font></th>
		</tr>
		<tr><td colspan="2"></td></tr>
	 	<tr bgcolor="#A4A4A4">
		 	<th colspan="2" align="center">Fill This Details </th>
		</tr>
		
		
	 	<tr bgcolor="#F2F2F2">
		<td width="50%"  align="right" >
Select Location :
</td>
<td>

		<input type="hidden" name="text_eno" id="text_eno" value="<?php echo $e_no; ?>" />
		
<select name="users" onChange="showUser(this.value)">

<option value="">Select A Location  :</option>
										<?php
								
								$sql="SELECT * 
								FROM `location`" ;
								$result=mysql_query($sql,$con);
								while($row1=mysql_fetch_array($result))
						{?>
							    <option value="<?php echo $row1['loca_id'];?>"><?php echo $row1['loca_name'];?></option>
 
						<?php } ?>  
			
							</select>
							<?php echo $row['location']; ?>
							</td>
							</tr>
							
		
	 	<tr bgcolor="#E6E6E6">
		<td width="50%"  align="right" >Team name : </td>
	 	<td>
		<label>
<div id="txtHint" class="c"><b>Team List will be here</b></div>
				</label>
				<?php	echo $row['teamno']; ?>
				</td>
				</tr>			
		
		 <tr bgcolor="#F2F2F2">
         <td width="50%"  align="right" >Engineer Name : </td>
     	<td width="50%"><label>
       <input name="text_name" type="text" id="text_name"  /><?php echo $row['name']; ?>
    	 </label></td>
   	</tr>
  	
	<tr bgcolor="#E6E6E6">
         <td width="50%" align="right">Address : </td>
     	<td width="50%"><label>
       	<input name="text_address" type="text" id="text_address" /><?php echo $row['address']; ?>
     </label></td>
   </tr>
   <tr bgcolor="#F2F2F2">
     <td width="50%" align="right" >Phone/Mobile : </td>
     <td width="50%" ><label>
       <input name="text_mobile" type="text" id="text_mobile" /><?php echo $row['p_no']; ?>
     </label></td>
   </tr>
   
   <tr bgcolor="#E6E6E6">
     <td width="50%" align="right" >Email address : </td>
     <td width="50%"><label>
       <input name="text_email" type="text" id="text_email" /><?php echo $row['e_id']; ?>
     </label></td>
   </tr>
   
   <tr bgcolor="#F2F2F2">
     <td width="50%" align="right" >User Name : </td>
     <td width="50%"><label>
       <input name="text_user" type="text" id="text_user" /><?php echo $row['username']; ?>
	   <?php }
	   ?>
     </label></td>
   </tr>
   
   <tr bgcolor="#E6E6E6">
     <td width="50%" align="right" >Password : </td>
     <td width="50%"><label>
       <input  type="password" id="text_pass" name="text_pass" />
     </label></td>
   </tr>
   
   <tr bgcolor="#F2F2F2">
     <td width="50%" align="right" >Confirm Password : </td>
     <td width="50%"><label>
       <input name="text_repass" type="password" id="text_repass" />
     </label></td>
   </tr>
   
   <tr bgcolor="#E6E6E6">
     <td colspan="2" align="center"><label>
       <input type="submit" name="insert" value="SUBMIT"  style="text-decoration:none;display: inline-block; " />
     </label></td>
     </tr>
 </table>
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
