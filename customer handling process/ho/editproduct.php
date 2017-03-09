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
<title>HO Edit Product </title>
		<link rel="stylesheet" type="text/css" href="ho.css" />
		<link rel="icon" type="image/ico" href="../image/favicon.ico">
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
<body   background="image/bg.jpg">
<center>
 <div id="header">
 		<?php include 'hoheder.php'; ?>
</div>
<div id="mainbody">
	<br/>
	<br/>
<?php
$product_no = $_GET['product_no'];
$con = mysql_connect("localhost","root","");
		if(!$con)
		{
			die("coude not correct");
		}
		mysql_select_db("cchp", $con);
		$i=1;
		$sql1="SELECT * FROM `productdetail` WHERE `productdetail`.`product_no` = '$product_no';";
		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
		
//echo $product_no;
?>
<form name="validation" method="post"   onSubmit="return validate();"  enctype="multipart/form-data">		
<table width="90%" align="center" cellpadding="10" cellspacing="5" border="0">
	<tr>
	<td width="100%" align="left" valign="top">
	
	<table  align="center" cellpadding="10" cellspacing="5"  class="c" border="1" width="">
	<tr bordercolor="#FFFFFF">
		<th colspan="2" ><font color="#000000" size="+3">Edit Product </font></th>	
	</tr>
	
	<tr><td>	
	
		<?php 
			echo "<br/>";
			$path= $row["pipath"]; 
			 echo '<img src="'.$path.'" alt="random image" width ="100%">'."&nbsp;&nbsp;";
		 
		?>
		<!-- <label><input type="file" name="file" id="file"></label>-->
	</td>
	<td valign="top">
	
	<?php
	
			echo "Product No : ";?> <label><input type="text" name="text_productno" id="text_productno" value="<?php echo  $product_no;?>"></label>
			<?php echo  $product_no;
			echo "<br/>";
			echo "<br/>";
			echo "Product Name : ";?> 
			<label>	<input type="text" name="text_productname" id="text_productname" value="<?php echo $row['p_name'];?>"/></label>
			<?php echo $row['p_name'];
			echo "<br/>";			echo "<br/>";
			echo "Prodcut Price : ";?>
			<label><input type="text" id="text_prices" name="text_prices" value="<?php echo $row['price'];?>"/></label>
			<?php echo $row['price'];
			echo "<br/>";			echo "<br/>";
			echo "Product Feature : ";?>
			<label><input type="text" id="text_fetures" name="text_fetures"/></label> 
			<?php echo $row['feature'];
			echo "<br/>";			echo "<br/>";
			echo "Product Review :";?>  <label><input type="text" id="text_review" name="text_review" value=" <?php echo $row['review'];?>"/></label>   <?php echo $row['review'];
			}
	?> 
	</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		
			       <input type="submit" name="insert" value="UPDATE"  style="text-decoration:none;display: inline-block;  height:auto width:20%" />

				<input type="reset" name="Clear" />
		</td>
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
