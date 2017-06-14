<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	
	<script>
		function mostrarValor(desplegable)
			{
				var comida= document.getElementById('comida');
				
				var indice=desplegable.options.selectedIndex;
				
				comida.innerHTML= 'Has escogido: '+desplegable.options[indice].text;
			}
	</script>
	
	<form action="#">
		<select id="desplegable" name="elegir_comida" onchange="mostrarValor(this);">
			<option value="1">Pizza</option>
			<option value="2">Hamburguesa</option>
			<option value="3">Kebab</option>
		</select>
	</form>
	<div>
		<span  id="comida"></span>
	</div>
	</body>
</html>