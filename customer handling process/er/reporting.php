
<?php

// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['uname']) && !isset($_SESSION['pword']) && !isset($_SESSION['e_no'])) {

		header("location:..\loginfinal.php");exit;	

}

?>

	<?php
				$complain=$_GET['complain'];
				$uname = $_SESSION['uname'];
				$e_no = $_SESSION['e_no'];
				$teamno;
				$filename = "$complain$uname";
		?>
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
				$complain=$_GET['complain'];
				echo "<br/>";
				move_uploaded_file($_FILES["file"]["tmp_name"],"report/" . $_FILES["file"]["name"]);
				$my_file =  "c". $complain."". $uname .'.txt'; 
				$handle = fopen("report/$my_file", 'w') or die('Cannot open file:  '.$my_file); 
				$handle = fopen("report/$fname", 'r');
				$data = fread($handle,filesize("report/$fname"));
				$path = "../er/report/$my_file";
				$handle = fopen("report/".$my_file, 'w') or die('Cannot open file:  '.$my_file);
				fwrite($handle, $data);
				$fname;
				unlink("report/$fname");
				//fclose("report/$my_file");
				$con=mysql_connect("localhost","root","");
				 mysql_select_db("cchp",$con);
				 @$a=$_POST['text_cc'];
				 $cc_id = $a;
				 @$b=$_POST['text_teamno'];
				 @$c=$_POST['text_eno'];
				 @$d=$_POST['text_report'];
				 @$e=$path;
				 $l=date("Y-m-d");
				 
	  
$sql1 =	 "INSERT INTO  `cchp`.`reportingdetail` (
`cc_id` ,
`teamno` ,
`er_no` ,
`reporting` ,
`rpath`,
`date`
)
VALUES (
'$a',  '$b',  '$c',  '$d', '$e', '$l'
);";

					if(!mysql_query($sql1,$con))
					{
						  die('Errormmm: ' . mysql_error());	
					}
					else
				
					{
					
						$sql2="UPDATE  `cchp`.`ccregister` SET  `c_status` =  1  WHERE  `ccregister`.`cc_id` = ".$a;
						if(!mysql_query($sql2,$con))
						{
				  			die('Errormmm: ' . mysql_error());
  						}
						else
						{
								echo "<script>alert('done succeffully'); window.location.href='index.php';</script>";
						}
						
				}  
					
			} 
			}
					
?>
<html>
<head>
<title>:: Er Site OF CnC ::</title>

		<link rel="stylesheet" type="text/css" href="ho.css" />
		
     <script language="javascript" type="text/javascript">
	 
     function validate()
     {
	 
     if(document.getElementById("text_report").value=="")
     {
         alert("Please write about report ");
         document.getElementById("text_report").focus();
         return false;
     }
	  var fup = document.getElementById('file');
        var fileName = fup.value;
        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

    if(ext == "txt" || ext =="TXT")
    {
				
     return true;
    }
	else
	{
		 alert("Please Uplaod only text ");
         document.getElementById("file").focus();
         return false;	
	}
 }
 </script>    
</head>

<body  background="image/bg.jpg">
<center>
<div id="header">
 		<?php include 'erheder.php'; ?>
</div>

<div id="mainbody">
	<br/>
	<br/>
	<?php
				$complain=$_GET['complain'];
	//			echo $complain;
				$uname = $_SESSION['uname'];
		//		echo $uname;
				$e_no = $_SESSION['e_no'];
				$teamno;
				$filename = "$complain$uname";
			//	echo $filename;
				
				 $con=mysql_connect("localhost","root","");
				 mysql_select_db("cchp",$con);
				 
$sql1 =	 "SELECT * 
FROM  `engineerdetail` WHERE e_no = $e_no;";

		$result=mysql_query($sql1,$con);
		while($row=mysql_fetch_array($result))
		{
			$teamno=$row['teamno'];
		}
		
		
	?>
	
	<table width="" align="center" cellpadding="10" cellspacing="5" border="1" class="c" >
		<tr>
		<td width="100%" align="center">
			
			<table width="100%" align="center" cellpadding="5" cellspacing="5" border="0" class="c">
			<tr>
				<th colspan="4"><font color="#000000" size="+3">Reporting</font></th>
			</tr>
			<tr>
				<td colspan="4">&nbsp;</td>
			</tr>
	
			<form action="" method="post"  enctype="multipart/form-data"  onSubmit="return validate();">
			<tr bgcolor="#A4A4A4">
			<td colspan="2" align="center">
				Fill Detail This For Do Reporting
			</tr>
			
			<input type="hidden"  name="text_cc" value="<?php echo $complain; ?>" />
			<input type="hidden" name="text_teamno" value="<?php echo $teamno; ?>"  />
			<input type="hidden" name="text_eno" value="<?php echo $e_no; ?>"  />
			
			<tr bgcolor="#F2F2F2">
			<td width="50%" align="right" valign="top">Reporting Detail :</td>
			<td width="50%" align="left"><textarea rows="4" cols="50" id="text_report" name="text_report"></textarea></td>
			</tr>
			
			<tr bgcolor="#E6E6E6"> 
			<td width="50%" align="right">Upload Documet If need For Reporting :</td>
			<td width="50%" align="left"><input type="file" name="file" id="file"></td>	
			</tr>
			
			<tr bgcolor="#F2F2F2">
			<td width="100%" align="center" valign="top" colspan="2">
	 <label>
       <input type="submit" name="insert" value="SUBMIT"  style="text-decoration:none;display: inline-block; width:30%" />
     </label>
	 	<input type="reset" name="reset" value="CANCEL"  style="text-decoration:none;display: inline-block; width:30%" /></td>
		</form>
	
</table>
</td>
</tr>
<tr>
	<td>
	</td>
</tr>
</table>
</br>
</br>
</div>


<div id="footer">
<br/>
<br/>
 		<?php include 'erfooter.php'; ?>
</div>
</center>
</body>
</html>
