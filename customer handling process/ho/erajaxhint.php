
<html>
<head>

<title>
</title>

<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>

<form>
		Select Engineer Name
<select name="users" onChange="showUser2(this.value)">

<option value="">-- Select a Engineer --</option>
									<?php
										$q = $_GET['q'];
								
								$con = mysql_connect("localhost","root");
								if(!$con)
								{
									die("coude not correct");
								}
								mysql_select_db("cchp",$con);
								$sql="SELECT * 
								FROM `engineerdetail` WHERE `teamno` = $q;" ;
								$result=mysql_query($sql,$con);
								while($row=mysql_fetch_array($result))
						{?>
							    <option value="<?php echo $row['e_no'];?>"><?php echo $row['name'];?></option>
 
						<?php } ?>  
			
							</select>

</form>


</body>
</html>
