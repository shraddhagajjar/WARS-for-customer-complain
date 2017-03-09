
<html>
<head>
<link rel="stylesheet" type="text/css" href="ho.css" />
<title>
</title>
</head>
<body>

<form>
		Select Complain Number
<select name="users" onChange="showUser2(this.value)">

<option value="">-- Select Complain --</option>
									<?php
										$q = $_GET['q'];
								echo $q;
								$con = mysql_connect("localhost","root");
								if(!$con)
								{
									die("coude not correct");
								}
								mysql_select_db("cchp",$con);
								$sql="SELECT * 
								FROM `ccregister`;" ;
								$result=mysql_query($sql,$con);
								while($row=mysql_fetch_array($result))
						{	
							if( $row['pr_no'] == $q)
							{
							?>
							 		
							    <option value="<?php echo $row['cc_id'];?>"><?php echo $row['c_name'];?></option>
 
						<?php 
						} 
					}
					?>  
			
							</select>

</form>




</body>
</html>
