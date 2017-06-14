<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			span{
				border: 1px solid black;
				width:400px;
				height:400px;
				border-radius: 3px;
				cursor:pointer;
			}
		</style>
	</head>
	<body style="background-color:pink;">
		<script>
			function cambiarcolor(obj,code)
			{
				 
				obj.style.backgroundColor='#'+code;
			}
			
			 
			function mouseout(obj)
			{
				 				
				obj.style.backgroundColor='transparent';
				 
			}
		</script>
		
		<span id="caja" onmouseout="mouseout(this)" onmouseover="cambiarcolor(this,'ff0000')" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span id="caja2" onmouseout="mouseout(this)" onmouseover="cambiarcolor(this,'00ff00')" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span id="caja3" onmouseout="mouseout(this)" onmouseover="cambiarcolor(this,'0000ff')" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		

	</body>
</html>