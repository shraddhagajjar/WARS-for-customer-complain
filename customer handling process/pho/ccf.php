
<?php
 $con=mysql_connect("localhost","root","");
 mysql_select_db("cchp",$con);
 @$a=$_POST['text_p'];
 @$b=$_POST['text_pname'];
 @$c=$_POST['text_cname'];
 @$d=$_POST['text_address'];
 @$e=$_POST['text_phno'];
 @$f=$_POST['text_altno'];
 @$g=$_POST['text_eid'];
 @$h=$_POST['text_location'];
 @$i=$_POST['txt_sdate'];
 @$j=$_POST['text_wyear'];
 @$k=$_POST['text_query'];
 $l=date("Y-m-d");
 @$m=$_POST['text_pho']; 
 if(@$_POST['insert'])
 {
 	echo "<script>alert('You Want Do Complian Fianlly..'); </script>";

 		

		$sql1="INSERT INTO `cchp`.`ccregister` (
`pr_no` ,
`pr_name` ,
`c_name` ,
`address` ,
`ph_no` ,
`aph_no` ,
`e_id` ,
`location` ,
`s_date` ,
`w_year` ,
`query` ,
`c_date` , 
`ho_status`,
`regi_id`
)
VALUES (
'$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l','1'
);";

	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    	window.alert('your complain registered succfully .Please wait 3 days for complian service');
    	window.location='index.php';
    </SCRIPT>");
	

	}
	 
 }
?>

<html>
<head>
<title>:: HO Create T L Site::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
		
     <script language="javascript" type="text/javascript">
	 
     function validate()
     {
	 
     if(document.getElementById("text_p").value=="")
     {
         alert("Please Enter Your Product Number");
         document.getElementById("text_p").focus();
         return false;
     }
     if(document.getElementById("text_cname").value=="")
     {
         alert("Please Enter Your Name");
         document.getElementById("text_cname").focus();
         return false;
     }
     if(!(isNaN(document.validation.text_cname.value)))
     {
         alert("Name has character only!");
         return false;
     }
	 if(document.getElementById("text_pname").value=="")
	 {
	 	 alert("Please ");
         document.getElementById("text_pname").focus();
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
	 
     if(document.getElementById("text_phno").value=="")
     {
         alert("Please Enter Your phone number");
         document.getElementById("text_phno").focus();
         return false;
     }
	
     if((isNaN(document.validation.text_phno.value)))
     {
         alert("Mobile has numeric only!");
         document.getElementById("text_phno").focus();
         return false;
     }
	 
	 
     if(document.getElementById("txt_sdate").value=="")
     {
         alert("Please Select Date");
         document.getElementById("txt_sdate").focus();
         return false;
     }
	 
     if(document.getElementById("text_altno").value=="")
     {
         alert("Please Enter Your phone number");
         document.getElementById("text_altno").focus();
         return false;
     }
	 
     if((isNaN(document.validation.text_altno.value)))
     {
         alert("Mobile has numeric only!");
         document.getElementById("text_altno").focus();
         return false;
     }
	 
     if(document.getElementById("text_wyear").value=="")
     {
         alert("Please Enter Your Password");
         document.getElementById("text_wyear").focus();
         return false;
     }
     
     var emailPat=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
     var emailid=document.getElementById("text_eid").value;
     var matchArray = emailid.match(emailPat);
     if (matchArray == null)
     {
         alert("Your email address is wrong. Please try again.");
         document.getElementById("text_eid").focus();
         return false;
     }
	 if(document.getElementById("text_query").value=="")
     {
         alert("Please ReEnter Your Password");
         document.getElementById("text_query").focus();
         return false;
     }
     return true;
 }
 </script>    
</head>

<body>
         <form name="validation" method="post" onSubmit="return validate();">
        <?php
			$uname = $_SESSION['uname'];
		?> 
<table width="100%" align="center" cellpadding="10" cellspacing="5" border="0" class="cc">
	<tr>
		<td>
	
<table width="100%" align="center" cellpadding="10" cellspacing="5" border="0" class="cc">
	<tr>
		<td align="center" colspan="4">
			<font color="#333333" size="+3"><b>Complain Form</b></font>
				<br/>	
		</td>
	</tr>
	<tr><td colspan="4">&nbsp; </td></tr>
	<tr>
		<td valign="top" align="right" width="25%">Product No<sup>*</sup></td>
		<td valign="top" align="left" width="25%"><label> 
		
		<input type="hidden" name="text_pho" id="text_pho" value="<?php echo $uname; ?>" />
		
		<select  id="text_p" name="text_p">
		<option value=""> -- Select Product No -- </option>
										<?php
								
								$con = mysql_connect("localhost","root");
								if(!$con)
								{
									die("coude not correct");
								}
								mysql_select_db("cchp",$con);
								$sql="SELECT * 
								FROM `productdetail`" ;
								$result=mysql_query($sql,$con);
								while($row=mysql_fetch_array($result))
						{?>
							    <option value="<?php echo $row['product_no'];?>"><?php echo $row['product_no'];?></option>
 
						<?php } ?>  
			
							</select>

		</label></td>
		
		<td valign="top" align="right" width="25%">Customer Name<sup>*</sup></td>
		<td valign="top" align="left" width="25%"><label><input type="text" id="text_cname" name="text_cname" size="25" /></label></td>
	</tr>


	<tr>
	
		<td valign="top" align="right" width="25%">Product Name<sup>*</sup></td> 
		<td valign="top" align="left" width="25%"><label>
		<select  id="text_pname" name="text_pname">
		<option value=""> -- Select Product Name -- </option>
										<?php
								
								$con = mysql_connect("localhost","root");
								if(!$con)
								{
									die("coude not correct");
								}
								mysql_select_db("cchp",$con);
								$sql="SELECT * 
								FROM `productdetail`" ;
								$result=mysql_query($sql,$con);
								while($row=mysql_fetch_array($result))
						{?>
							    <option value="<?php echo $row['p_name'];?>"><?php echo $row['p_name'];?></option>
 
						<?php } ?>  
			
							</select>
		</label></td>
		<td valign="top" align="right" width="25%">Address<sup>*</sup> </td>
		<td valign="top" align="left" width="25%"><label><textarea rows="3" cols="20" name="text_address" id="text_address">
</textarea></label></td>
	</tr>

	<tr>
		<td valign="top" align="right" width="25%">Location<sup>*</sup></td>
		<td valign="top" align="left" width="50%"> <label>
		<select  id="text_location" name="text_location">
		<option value=""> -- Select A Location -- </option>
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

		</label></td>
		<td valign="top" align="right" width="25%">Phone no<sup>*</sup></td>
		<td valign="top" align="left" width="25%"><label> <input type="text" id="text_phno" name="text_phno" size="25"/></label></td>
	</tr>
	
	<tr>
		<td valign="top" align="right" width="25%">Selling Date<sup>*</sup></td>
		<td valign="top" align="left" width="25%"> <label> <input type="date"  id="txt_sdate" name="txt_sdate"/></label></td>
		<td valign="top" align="right" width="25%">Alternate Phone no<sup>*</sup></td>
		<td valign="top" align="left" width="25%"> <label><input type="text" id="text_altno" name="text_altno"  size="25"/></label></td>
	</tr>
	
	<tr>
		<td valign="top" align="right" width="25%">Warranty Year<sup>*</sup></td>
		<td valign="top" align="left" width="25%"> <label><!--<input type="text" id="text_wyear" name="text_wyear"  />-->
		<select  id="text_wyear" name="text_wyear"  >
		<option value="">-- Select Warranty Year --</option>
						<option value="">N/A</option>
 
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
			
		</select>
		</label></td>
		<td valign="top" align="right" width="25%">Email id<sup>*</sup></td>
		<td valign="top" align="left" width="25%"> <input type="text" id="text_eid" name="text_eid" size="25" /></td>
	</tr>
	<tr>
		<td align="right" valign="top" width="30%" > 
		
		Complain<sup>*</sup>
		</td>
		<td align="left" valign="top" width="70%"  colspan="3">
		<label>
	  <textarea rows="4" cols="50" id="text_query" name="text_query"></textarea></label></td>
	</tr>
	
   <tr >
     <td   colspan="4" align="center">
	 <label>
       <input type="submit" class="sss" name="insert" value="SUBMIT"  style="text-decoration:none;display: inline-block; width:auto" />
     </label>
	 	<input type="reset"class="sss" name="reset" value="CANCEL"  style="text-decoration:none;display: inline-block; width:inherit" />
	 </td>
     </tr>
 </table>
 </td>
 </tr>
 </table>
 </center>
 </form>

</body>
</html>
