<html>
<head>
<link rel="stylesheet" type="text/css" href="ho.css" />
<script>
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
xmlhttp.open("GET","tlajaxhint.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>

<table align="center" width="100%" cellpadding="5" cellspacing="10" class="c"
<tr>
<td>
	Select Team Name:
<select name="users" onChange="showUser(this.value)">

<option value="">Select a Team Leader:</option>
										<?php
								
								$con = mysql_connect("localhost","root");
								if(!$con)
								{
									die("coude not correct");
								}
								mysql_select_db("cchp",$con);
								$sql="SELECT * 
								FROM `teamdetail`" ;
								$result=mysql_query($sql,$con);
								while($row=mysql_fetch_array($result))
						{?>
							    <option value="<?php echo $row['teamno'];?>"><?php echo $row['name'];?></option>
 
						<?php } ?>  
			
							</select>
</td>
</tr>
<tr>
<td>
	
<div id="txtHint" class="c"><b>Team Details will be listed here.</b></div>
</td>
</tr>
</table>

<br/>
<br/>

</body>
</html>