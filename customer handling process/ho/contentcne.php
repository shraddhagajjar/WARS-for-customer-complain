
<?php

 $con=mysql_connect("localhost","root","");
 mysql_select_db("cchp",$con);
 @$j=$_POST['text_teamno'];
 @$a=$_POST['text_name'];
 @$b=$_POST['text_address'];
 @$c=$_POST['users'];
 @$d=$_POST['text_mobile'];
 @$e=$_POST['text_email'];
 @$f=$_POST['text_user'];
 @$g=$_POST['text_pass'];
 @$h=$_POST['text_repass'];
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
	$sql1= "INSERT INTO  `cchp`.`engineerdetail` (
`teamno`,
`name` ,
`address` ,
`location` ,
`p_no` ,
`e_id` ,
`username` ,
`password` ,
`joindate`
)
VALUES (
'$j','$a',  '$b',  '$c',  '$d',  '$e',  '$f',  '$g',  '$i'
);";

	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('Engineer Creation Successfully Done');   window.location.href='vel.php';</script>";
	

	}
	 
 }
}
?>

<html>
<head>
<title>:: HO Enginner Handle Site::</title>
	<link rel="stylesheet" type="text/css" href="ho.css" />

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

<body>

<form name="validation" method="post" onSubmit="return validate();">
    <table border="0" class="c"  align="center" cellpadding="10"  cellspacing="5" width="">
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
<select name="users" onChange="showUser(this.value)">

<option value="">Select A Location  :</option>
										<?php
								
								$con = mysql_connect("localhost","root");
								if(!$con)
								{
									die("coude not correct");
								}
								mysql_select_db("cchp",$con);
								$sql="SELECT * 
								FROM `location`" ;
								$result=mysql_query($sql,$con);
								while($row=mysql_fetch_array($result))
						{?>
							    <option value="<?php echo $row['loca_id'];?>"><?php echo $row['loca_name'];?></option>
 
						<?php } ?>  
			
							</select>
							</td>
							</tr>
							
		
	 	<tr bgcolor="#E6E6E6">
		<td width="50%"  align="right" >Team name : </td>
	 	<td>
		<label>
<div id="txtHint" class="c"><b>Team List will be here</b></div>
				</label>
				</td>
				</tr>			
		
		 <tr bgcolor="#F2F2F2">
         <td width="50%"  align="right" >Engineer Name : </td>
     	<td width="50%"><label>
       <input name="text_name" type="text" id="text_name" />
    	 </label></td>
   	</tr>
  	
	<tr bgcolor="#E6E6E6">
         <td width="50%" align="right">Address : </td>
     	<td width="50%"><label>
       	<input name="text_address" type="text" id="text_address" />
     </label></td>
   </tr>
   <tr bgcolor="#F2F2F2">
     <td width="50%" align="right" >Phone/Mobile : </td>
     <td width="50%" ><label>
       <input name="text_mobile" type="text" id="text_mobile" />
     </label></td>
   </tr>
   
   <tr bgcolor="#E6E6E6">
     <td width="50%" align="right" >Email address : </td>
     <td width="50%"><label>
       <input name="text_email" type="text" id="text_email" />
     </label></td>
   </tr>
   
   <tr bgcolor="#F2F2F2">
     <td width="50%" align="right" >User Name : </td>
     <td width="50%"><label>
       <input name="text_user" type="text" id="text_user" />
     </label></td>
   </tr>
   
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
   
   <tr bgcolor="#E6E6E6">
     <td colspan="2" align="center"><label>
       <input type="submit" name="insert" value="SUBMIT"  style="text-decoration:none;display: inline-block; " />
     </label></td>
     </tr>
 </table>
 </form>

</body>
</html>
