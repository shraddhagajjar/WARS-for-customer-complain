<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-ui.min.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

</script>
<script> 
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
});

</script>

<script> 
$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
  });
});

</script>

<script> 
$(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
  });
});

</script>

<script> 
$(document).ready(function(){
  $("#flip4").click(function(){
    $("#panel4").slideToggle("slow");
  });
});

</script>
<script> 
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
});

</script>
 
<style type="text/css"> 
#panel,#flip
{
padding:5px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
width:auto;
}
#panel
{
padding:50px;
display:none;
}

#panel1,#flip1
{
padding:5px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
width:auto;
}
#panel1
{
padding:50px;
display:none;
}

#panel2,#flip2
{
padding:5px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
width:auto;
}
#panel2
{
padding:50px;
display:none;
}

#panel3,#flip3
{
padding:5px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
width:auto;
}
#panel3
{
padding:50px;
display:none;
}

#panel4,#flip4
{
padding:5px;
text-align:center;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
width:auto;
}
#panel4
{
padding:50px;
display:none;
}
</style>
</head>
<body>
<table width="100%" align="center">
 <tr>
 <td	width="50%">
<div id="flip">
				<img src="image/tablets.jpg" /> </div>
<div id="panel">Details of Panal</div>
</td>
<td width="50%">
</td>
</tr>

 <tr>
 <td	width="50%">
<div id="flip1">
				<img src="image/tv.jpg" /> </div>
<div id="panel1"></div>
</td>
<td width="50%">
</td>
</tr>

 <tr>
 <td	width="50%">
<div id="flip2">
				<img src="image/camera.jpg" /> </div>
<div id="panel2">Details of Panal</div>
</td>
<td width="50%">
</td>
</tr>

 <tr>
 <td	width="50%">
<div id="flip3">
				<img src="image/computer.jpg" /> </div>
<div id="panel3">Details of Panal</div>
</td>
<td width="50%">
</td>
</tr>
<!--
 <tr>
 <td	width="50%">
<div id="flip4">
				<img src="image/watches.jpg" /> </div>
<div id="panel4">Details of Panal</div>
</td>
<td width="50%">
</td>
</tr>-->
</table>

</body>
</html>

