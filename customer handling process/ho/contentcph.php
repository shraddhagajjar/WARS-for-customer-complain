<?php
$filename = "";
?>
<?php
$msg = "";
$path;
	if(@$_POST['insert'])
 	{
		if ($_FILES["file"]["error"] > 0)
 		{
  			$msg1 = "Error:" . $_FILES["file"]["error"] . "<br>";
  		}
		else
		{
				$fname=$_FILES["file"]["name"];
	//			echo "<br/>";
				
				move_uploaded_file($_FILES["file"]["tmp_name"],"../proimage/" . $_FILES["file"]["name"]);
				$path1 = "../proimage/";
				 $path2 = "$fname";
			//	 $path = $path1+$path2;
	//			echo $path1."<br><br/>";
		//		echo $path2."<br/>";
 				$con=mysql_connect("localhost","root","");
 mysql_select_db("cchp",$con);
 @$a=$_POST['text_productno'];
 @$b=$_POST['text_productname'];
 @$c=$_POST['text_prices'];
 @$d=$_POST['text_fetures'];
 @$e=$_POST['text_review'];
 @$f=$path;
 //echo $path;
 //echo $d;
 $i=date("Y-m-d");
 if(@$_POST['insert'])
 {
 
$sql1= "INSERT INTO  `cchp`.`productdetail` (
`product_no`,
`p_name` ,
`price` ,
`feature` ,
`review` ,
`pipath` 
)
VALUES (
'$a',  '$b',  '$c',  '$d',  '$e',  '$path1$path2'
);";

	if(!mysql_query($sql1,$con))
	{
		  die('Errormmm: ' . mysql_error());	
	}
	else
	{
		echo "<script>alert('product uplaod succefully');   window.location.href='vpoduct.php';</script>";
	}
	 
 }
 
 }
 }
 
?>

<html>
<head>
<title>:: HO Product Handle Site::</title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
     <script language="javascript" type="text/javascript">
     function validate()
     {
	 
     if(document.getElementById("text_productno").value=="")
     {
         alert("Please Enter prodcut no");
         document.getElementById("text_productno").focus();
         return false;
     }
     if(document.getElementById("text_prodcutname").value=="")
     {
         alert("Please Enter prodcut Name");
         document.getElementById("text_prodcutname").focus();
         return false;
     }
	 if(document.getElementById("text_prices").value=="")
	 {
	 	 alert("Please Enter prices");
         document.getElementById("text_prices").focus();
         return false;
	 }
	 if(document.getElementById("text_features").value=="")
	 {
	 	 alert("Please Enter Features");
         document.getElementById("text_features").focus();
         return false;
	 }
     if(document.getElementById("text_review").value=="")
     {
         alert("Please Enter Review");
         document.getElementById("text_review").focus();
         return false;
     }
	
     if(document.getElementById("file").value=="")
     {
         alert("Please Uplaod image");
         document.getElementById("file").focus();
         return false;
     }
	 
	 
	var extensions = new Array("jpg","jpeg","gif","png","bmp");
	var image_file = document.getElementById("file").value;
	var image_length = document.validation.file.value.length;
	var pos = image_file.lastIndexOf('.') + 1;
	var ext = image_file.substring(pos, image_length);
	var final_ext = ext.toLowerCase();
	for (i = 0; i < extensions.length; i++)
	{
		if(extensions[i] == final_ext)
		{
			return true;
		}
		
	}
	alert("You must upload an image file with one of the following extensions: "+ extensions.join(', ') +".");
	return false;
	
     return true;
 }
 </script>    
		
</head>

<body>
<br/>
		<form name="validation" method="post"   onSubmit="return validate();"  enctype="multipart/form-data">
		<table align="center" width="100%" cellpadding="5" cellspacing="5" class="c">
			<tr>
		<th colspan="4"><font color="#000000" size="+3">Add New Product</font></th>
	</tr>
	<tr><td colspan="4">&nbsp;</td></tr>

		<tr>
			<th colspan="2" align="center" bgcolor="#A4A4A4">Product Registration</th>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td align="right" width="50%">Product no :</td>
			<td align="left"><label><input type="text" name="text_productno" id="text_productno"></label></td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td align="right" width="50%">
				Product Name :
			</td>
			
			<td align="left" width="50%">
				<label>	<input type="text" name="text_productname" id="text_productname"/></label>
			</td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">Price :</td>
			<td width="50%" align="left"><label><input type="text" id="text_prices" name="text_prices"/></label></td>
		</tr>
		<tr bgcolor="#E6E6E6">
			<td width="50%" align="right">Fetures :</td>
			<td width="50%" align="left"><label><input type="text" id="text_fetures" name="text_fetures"/>
			</label></td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td width="50%" align="right">Review :</td>
			<td width="50%" align="left"><label><input type="text" id="text_review" name="text_review"/></label></td>
		</tr>
		
		<tr bgcolor="#E6E6E6">
			<td align="right" width="50%">Upload Product Picture :</td>
			<td align="left"><label><input type="file" name="file" id="file"></label></td>
		</tr>
		<tr bgcolor="#F2F2F2">
			<td width="100%" align="center" colspan="2">
			       <input type="submit" name="insert" value="SUBMIT"  style="text-decoration:none;display: inline-block;  height:auto width:20%" />

				<input type="reset" name="Clear" />
			</td>
		</tr>
		</table>
		</form>
	
</body>
</html>
