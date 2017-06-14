<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<script>
			function mover()
			{
				var paramover= document.getElementById('texto');
				var movido= document.getElementById('movido');	
				movido.innerHTML= paramover.value;
			}
		</script>
	<form id="formulario">
		<input type="text" id="texto"/>
		<textarea id="movido" placeholder="tu texto se moverá aquí!"></textarea>
	</form>
	<br/>
	<span style="border:1px solid #ccc;background-color:aqua; padding:4px;border-radius:5px;cursor:pointer;" onclick="mover()">CLICK MOVER</span>
	</body>
</html>