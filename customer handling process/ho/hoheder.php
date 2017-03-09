

<html>
<head>
<title>:: HO HEDER ::</title>
<link rel="stylesheet" type="text/css" href="ho.css" />
</head>

<body>
<br/>
<table align="center" width="100%" border="0" cellpadding="5" cellspacing="5" class="cc">
<tr>
	<td width="40%" align="left" valign="top">
	<img src="image/25.jpg" border="0"    />
	</td>
	
	<td width="60%" align="right">
	
	<?php $uname = $_SESSION['uname'];
	echo "Welcome ".$uname;
	 ?>&nbsp;&nbsp;&nbsp;&nbsp;[<a href="logout.php" title="Logout">Logout</a>]
	</td>
</tr>
<tr>
<td colspan="2">
	<?php include 'nav.html'; ?>
</td>

</tr>
</table>

</body>
</html>
