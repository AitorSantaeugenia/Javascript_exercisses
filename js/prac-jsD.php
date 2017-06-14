<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<script>
			function moverizq()
			{
				var movido1= document.getElementById('movido1');
				var movido2= document.getElementById('movido2');	
				movido1.value=movido2.value;
				movido2.value="";
			}
			function moverder()
			{
				var movido1= document.getElementById('movido1');
				var movido2= document.getElementById('movido2');	
				movido2.value=movido1.value;
				movido1.value="";
			}
		</script>
	<form id="formulario">
		<textarea id="movido1" placeholder="tu texto se moverá aquí!"></textarea>
		<textarea id="movido2" placeholder="tu texto se moverá aquí!"></textarea>
	</form>
	<br/>
	<span style="border:1px solid #ccc;background-color:aqua; padding:4px;border-radius:5px;cursor:pointer;"  onclick="moverizq()"><<</span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="border:1px solid #ccc;background-color:aqua; padding:4px;border-radius:5px;cursor:pointer;"  onclick="moverder()">>></span>
	</body>
</html>