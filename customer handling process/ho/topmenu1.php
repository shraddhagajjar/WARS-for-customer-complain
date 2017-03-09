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

<title>Topphp</title>

</head>

<body>
<table width="100%" border="0" cellpadding="5" cellspacing="5">
	<tr>
		<td width="25%" align="center"  onMouseMove="fun(this)" class="c2" onMouseOut="fun1(this)" >
			Home
		</td>
		<td width="25%" align="center" onMouseMove="fun(this)" class="c2" onMouseOut="fun1(this)" >
			Register
		</td>
		<td width="25%" align="center" onMouseMove="fun(this)" class="c2" onMouseOut="fun1(this)" >
			About
		</td>
		<td width="25%" align="center" onMouseMove="fun(this)" class="c2" onMouseOut="fun1(this)" >
			Feedback
		</td>
	</tr>
	
</table>
</body>
</html>
