<html>
<head>
<title>Customer Complain Inquiery</title>
		<link rel="stylesheet" type="text/css" href="ccms.css" />
		<link rel="icon" type="image/ico" href="image/favicon.ico">
</head>
<body background="image/bg.jpg">
<center>
<div id="header">
 		<?php include 'heder.php'; ?>
</div>
<div id="mainbody" >
	<br/>
	<br/>
	
	<br/>
		<form action="" method="post" name="form" id="form">

<table width="90%" align="center" cellpadding="10" cellspacing="5" border="0" class="cc">
	<tr>
		<td>
	
<table width="90%" align="center" cellpadding="10" cellspacing="5" border="0" class="cc">
	<tr>
		<td align="center" colspan="2">
			<font color="#333333" size="+3"><b>Make Inquiry</b></font>
			<br/>	
		</td>
	</tr>
	<tr>
		<td width="25%">		</td>
		<td width="75%">		</td>
	</tr>
	<tr>
		<td><b>Name<sup>*</sup></b>&nbsp;</td>
		<td><input type="text" name="name" id="name" size="35" />		</td>
	</tr>
	
	<tr>
	<td><b>Gender<sup>*</sup></b>&nbsp;&nbsp;&nbsp;</td>
		<td>
               <label>
                  <input type="radio" name="radio" id="radio" value="radio">Male
                </label>
              	<label>
	                <input type="radio" name="radio2" id="radio2" value="radio2">              Female
    	        </label>
		</td>
	</tr>
	<tr>
		<td><b>Email Address<sup>*</sup>&nbsp;</b></td>
		<td><input type="text" name="email" id="email" size="35" /></td>
	</tr>
	<tr>
		<td><b>Contact No.<sup>*</sup>&nbsp;</b></td>
		<td><input type="text" name="no" id="no" size="35" />		</td>
	</tr>
	<tr>
		<td><b>Location<sup>*</sup>&nbsp;</b></td>
		<td>
		 <label>
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
								<option value="0">Other</option>
							</select>

		</label></td>
		
	</tr>
	<tr>
		<td>			<b>Inquiry About<sup>*</sup>&nbsp;</b>			</td>
			<td>
			<select name="product">
		        <option> -- Select -- </option>
	    	    <option value="1">Complain</option>
				<option value="2">Product</option>
				<option value="3">Other</option>
      		</select>
	  </td>
	</tr>
	<tr>
			<tr>
				<td valign="top" align="">
					<b>Message <sup>*</sup>&nbsp;</b>
				</td>
				<td valign="top">			
					<textarea name="msg" rows="5" cols="25" id="msg"></textarea>
				</td>
		
	</tr>
	<tr>
		<td>
		</td>
		<td>
		
		<input type="submit" name="submit" value="Submit"  title="Do Inquery" style="width:140px; float:center;" class="sss"/>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="Clear" name="reset" title="Clear ALl Text Box" style="width:140px; float:center;" class="sss"/>
		
		</td>
	</tr>
</table>
</td>
</tr>
</table>
</form>	
	<?php
	 if(isset($_POST['submit']))
	 {
	 	echo"<script> alert('Your Inquiry Is Sended  Succfully');</script>";
	 }
	?>
		
		
	
		
		
		
<br/>
<br/>

</div>

<div id="footer">
 		<?php include 'footer.php'; ?>
</div>
</center>
</body>
</html>
